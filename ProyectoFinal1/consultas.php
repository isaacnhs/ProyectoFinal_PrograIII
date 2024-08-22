<?php
require 'includes/db.php';

class Consultas
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function obtenerAsignaturasAlumno($alumno_id)
    {
        $query = "SELECT asignatura.id, asignatura.nombre
                  FROM asignatura
                  JOIN asignatura_has_alumno ON asignatura.id = asignatura_has_alumno.asignatura_id
                  WHERE asignatura_has_alumno.alumno_id = :alumno_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':alumno_id', $alumno_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerHorarioAsignatura($asignatura_id)
    {
        $query = "SELECT dia, hora_inicio, hora_fin
                  FROM horario
                  WHERE asignatura_id = :asignatura_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':asignatura_id', $asignatura_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerAlumnosCompartidos($alumno_id)
    {
        $query = "SELECT DISTINCT a.nombre, a.apellidos
                  FROM alumno a
                  JOIN asignatura_has_alumno aha ON a.id = aha.alumno_id
                  JOIN asignatura asg ON aha.asignatura_id = asg.id
                  JOIN asignatura_has_alumno aha2 ON asg.id = aha2.asignatura_id
                  WHERE aha2.alumno_id = :alumno_id AND a.id != :alumno_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':alumno_id', $alumno_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerProfesoresAlumno($alumno_id)
    {
        $query = "
            SELECT p.nombre, p.apellidos, a.nombre AS asignatura
            FROM profesor p
            INNER JOIN asignatura a ON p.id = a.profesor_id
            INNER JOIN asignatura_has_alumno aha ON a.id = aha.asignatura_id
            WHERE aha.alumno_id = :alumno_id
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':alumno_id', $alumno_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerAsignaturasConNotas($alumno_id)
    {
        $query = "
            SELECT a.id, a.nombre 
            FROM asignatura a
            INNER JOIN asignatura_has_alumno aha ON a.id = aha.asignatura_id
            WHERE aha.alumno_id = :alumno_id
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':alumno_id', $alumno_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerNotasAsignatura($alumno_id, $asignatura_id)
    {
        $query = "
            SELECT n.trimestre, n.nota
            FROM nota n
            INNER JOIN asignatura_has_alumno aha ON n.asignatura_has_alumno_asignatura_id = aha.asignatura_id
                AND n.asignatura_has_alumno_alumno_id = aha.alumno_id
            WHERE aha.alumno_id = :alumno_id AND aha.asignatura_id = :asignatura_id
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':alumno_id', $alumno_id);
        $stmt->bindParam(':asignatura_id', $asignatura_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerFaltasAsistencia($alumno_id, $asignatura_id)
    {
        $query = "SELECT fecha, justificada FROM falta_asistencia 
        WHERE alumno_id = :alumno_id AND asignatura_id = :asignatura_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['alumno_id' => $alumno_id, 'asignatura_id' => $asignatura_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerAsignaturasProfesor($profesor_id)
    {
        $stmt = $this->pdo->prepare('
            SELECT a.id, a.nombre 
            FROM asignatura a
            INNER JOIN profesor p ON p.id = a.profesor_id
            WHERE p.id = :profesor_id
        ');
        $stmt->execute(['profesor_id' => $profesor_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerAlumnosAsignatura($asignatura_id)
    {
        $stmt = $this->pdo->prepare('
            SELECT al.id, al.nombre, al.apellidos, 
                   COALESCE(SUM(fa.cantidad_faltas), 0) AS cantidad_faltas
            FROM alumno al
            INNER JOIN asignatura_has_alumno aha ON aha.alumno_id = al.id
            LEFT JOIN (
                SELECT alumno_id, asignatura_id, COUNT(*) AS cantidad_faltas
                FROM falta_asistencia
                WHERE asignatura_id = :asignatura_id
                GROUP BY alumno_id, asignatura_id
            ) fa ON fa.alumno_id = al.id
            WHERE aha.asignatura_id = :asignatura_id
            GROUP BY al.id, al.nombre, al.apellidos
        ');
        $stmt->execute(['asignatura_id' => $asignatura_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerNotasPorAsignatura($asignatura_id)
    {
        $query = "
            SELECT al.id, al.nombre, al.apellidos, COALESCE(n.nota, 0) AS nota
            FROM alumno al
            INNER JOIN asignatura_has_alumno aha ON al.id = aha.alumno_id
            LEFT JOIN nota n ON aha.asignatura_id = n.asignatura_has_alumno_asignatura_id 
                               AND aha.alumno_id = n.asignatura_has_alumno_alumno_id
            WHERE aha.asignatura_id = :asignatura_id
        ";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':asignatura_id', $asignatura_id);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerProfesoresColegio()
    {
        $stmt = $this->pdo->query('
            SELECT id, nombre, apellidos
            FROM profesor
        ');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizarNota($alumno_id, $asignatura_id, $nota)
    {
        // Verificar si ya existe una nota para el alumno en esta asignatura
        $query = "
            SELECT id 
            FROM nota 
            WHERE asignatura_has_alumno_asignatura_id = :asignatura_id 
              AND asignatura_has_alumno_alumno_id = :alumno_id
        ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            'asignatura_id' => $asignatura_id,
            'alumno_id' => $alumno_id
        ]);
        $nota_existente = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($nota_existente) {
            // Si ya existe, actualizamos la nota
            $stmt = $this->pdo->prepare('
                UPDATE nota
                SET nota = :nota
                WHERE asignatura_has_alumno_asignatura_id = :asignatura_id 
                  AND asignatura_has_alumno_alumno_id = :alumno_id
            ');
        } else {
            // Si no existe, creamos una nueva entrada
            $stmt = $this->pdo->prepare('
                INSERT INTO nota (asignatura_has_alumno_asignatura_id, asignatura_has_alumno_alumno_id, nota)
                VALUES (:asignatura_id, :alumno_id, :nota)
            ');
        }

        $stmt->execute([
            'nota' => $nota,
            'asignatura_id' => $asignatura_id,
            'alumno_id' => $alumno_id
        ]);
    }

    public function obtenerAlumnosPorAsignatura($asignatura_id)
    {
        $stmt = $this->pdo->prepare('
SELECT al.id, al.nombre, al.apellidos, fa.fecha, fa.justificada, COUNT(fa.id) AS cantidad_faltas
FROM alumno al
JOIN asignatura_has_alumno aha ON al.id = aha.alumno_id
LEFT JOIN falta_asistencia fa ON al.id = fa.alumno_id AND fa.asignatura_id = :asignatura_id
WHERE aha.asignatura_id = :asignatura_id
GROUP BY al.id, al.nombre, al.apellidos, fa.fecha, fa.justificada


        ');
        $stmt->execute(['asignatura_id' => $asignatura_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener el último ID en la tabla falta_asistencia
    private function obtenerUltimoIdFaltaAsistencia()
    {
        $stmt = $this->pdo->query('
        SELECT MAX(id) as max_id FROM falta_asistencia
    ');
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['max_id'] ? $result['max_id'] : 0;
    }

    // Registrar o actualizar una falta de asistencia de un alumno
    public function registrarFalta($alumno_id, $asignatura_id, $cantidad_faltas, $justificada = 'No')
    {
        // Obtener el último ID registrado
        $ultimoId = $this->obtenerUltimoIdFaltaAsistencia();

        // Insertar un nuevo registro por cada falta
        for ($i = 0; $i < $cantidad_faltas; $i++) {
            $nuevoId = $ultimoId + 1;  // Incrementar el ID manualmente

            $stmt = $this->pdo->prepare('
            INSERT INTO falta_asistencia (id, alumno_id, asignatura_id, fecha, justificada)
            VALUES (:id, :alumno_id, :asignatura_id, CURDATE(), :justificada)
        ');
            $stmt->execute([
                'id' => $nuevoId,
                'alumno_id' => $alumno_id,
                'asignatura_id' => $asignatura_id,
                'justificada' => $justificada
            ]);

            $ultimoId = $nuevoId;  // Actualizar el último ID para la próxima inserción
        }
    }

    public function actualizarFalta($alumno_id, $asignatura_id, $cantidad_faltas, $justificada = 'No', $fecha = null)
    {
        // Si no se proporciona una fecha, usa la fecha actual
        $fecha = $fecha ?? date('Y-m-d');

        // Primero, eliminamos las faltas antiguas para esa fecha específica
        $stmt = $this->pdo->prepare('
        DELETE FROM falta_asistencia
        WHERE alumno_id = :alumno_id AND asignatura_id = :asignatura_id AND fecha = :fecha
    ');
        $stmt->execute([
            'alumno_id' => $alumno_id,
            'asignatura_id' => $asignatura_id,
            'fecha' => $fecha
        ]);

        // Luego, insertamos las nuevas faltas
        for ($i = 0; $i < $cantidad_faltas; $i++) {
            $nuevoId = $this->obtenerUltimoIdFaltaAsistencia() + 1;  // Obtener el siguiente ID disponible

            $stmt = $this->pdo->prepare('
            INSERT INTO falta_asistencia (id, alumno_id, asignatura_id, fecha, justificada)
            VALUES (:id, :alumno_id, :asignatura_id, :fecha, :justificada)
        ');
            $stmt->execute([
                'id' => $nuevoId,
                'alumno_id' => $alumno_id,
                'asignatura_id' => $asignatura_id,
                'fecha' => $fecha,
                'justificada' => $justificada
            ]);
        }
    }

    public function darAltaAlumno($login, $password, $nombre, $apellidos, $nivel_id)
    {
        $stmt = $this->pdo->query('SELECT MAX(id) AS max_id FROM alumno');
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $lastId = $result['max_id'];

        $newId = $lastId ? $lastId + 1 : 1;

        $stmt = $this->pdo->prepare('
            INSERT INTO alumno (id, login, clave, nombre, apellidos, nivel_id)
            VALUES (:id, :login, :password, :nombre, :apellidos, :nivel_id)
        ');
        $stmt->execute([
            'id' => $newId,
            'login' => $login,
            'password' => $password,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'nivel_id' => $nivel_id
        ]);

        return $stmt->rowCount() > 0 ? "Alumno insertado correctamente." : "No se pudo insertar el alumno.";
    }


    public function darAltaAsignatura($nombre, $nivel_id, $profesor_id)
    {
        $stmt = $this->pdo->query('SELECT MAX(id) AS max_id FROM asignatura');
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $lastId = $result['max_id'];

        $newId = $lastId ? $lastId + 1 : 1;

        $stmt = $this->pdo->prepare('
            INSERT INTO asignatura (id, nombre, nivel_id, profesor_id)
            VALUES (:id, :nombre, :nivel_id, :profesor_id)
        ');
        $stmt->execute([
            'id' => $newId,
            'nombre' => $nombre,
            'nivel_id' => $nivel_id,
            'profesor_id' => $profesor_id
        ]);

        return $stmt->rowCount() > 0 ? "Asignatura insertada correctamente." : "No se pudo insertar la asignatura.";
    }


    public function matricularAlumno($alumno_id, $asignatura_id)
    {
        $stmt = $this->pdo->prepare('
            SELECT COUNT(*) FROM asignatura_has_alumno 
            WHERE asignatura_id = :asignatura_id AND alumno_id = :alumno_id
        ');
        $stmt->execute([
            'asignatura_id' => $asignatura_id,
            'alumno_id' => $alumno_id
        ]);
        $count = $stmt->fetchColumn();

        if ($count > 0) {
            return "El alumno ya está matriculado en esta asignatura.";
        }

        $stmt = $this->pdo->prepare('
            INSERT INTO asignatura_has_alumno (asignatura_id, alumno_id) 
            VALUES (:asignatura_id, :alumno_id)
        ');
        try {
            $stmt->execute([
                'asignatura_id' => $asignatura_id,
                'alumno_id' => $alumno_id
            ]);
            return "Alumno matriculado correctamente en la asignatura.";
        } catch (PDOException $e) {
            return "Error al matricular al alumno: " . $e->getMessage();
        }
    }



    public function darBajaUsuario($id)
    {
        $stmt = $this->pdo->prepare('
            DELETE FROM alumno
            WHERE id = :id
        ');
        $stmt->execute(['id' => $id]);
        return $stmt->rowCount() > 0 ? "Usuario dado de baja correctamente." : "No se pudo dar de baja el usuario.";
    }

    public function modificarAlumno($usuario_id, $login, $password, $nombre, $apellidos, $nivel_id)
    {
        $stmt = $this->pdo->prepare('
            UPDATE alumno
            SET login = :login, clave = :password, nombre = :nombre, apellidos = :apellidos, nivel_id = :nivel_id
            WHERE id = :usuario_id
        ');
        $stmt->execute([
            'login' => $login,
            'password' => $password,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'nivel_id' => $nivel_id,
            'usuario_id' => $usuario_id
        ]);
        return $stmt->rowCount() > 0 ? "Datos del alumno modificados correctamente." : "No se pudieron modificar los datos del alumno.";
    }



    public function modificarAsignatura($asignatura_id, $nombre, $nivel_id, $profesor_id)
    {
        $stmt = $this->pdo->prepare('
            UPDATE asignatura
            SET nombre = :nombre, nivel_id = :nivel_id, profesor_id = :profesor_id
            WHERE id = :asignatura_id
        ');
        $stmt->execute([
            'nombre' => $nombre,
            'nivel_id' => $nivel_id,
            'profesor_id' => $profesor_id,
            'asignatura_id' => $asignatura_id
        ]);
        return $stmt->rowCount() > 0 ? "Datos de la asignatura modificados correctamente." : "No se pudieron modificar los datos de la asignatura.";
    }


    public function darBajaAsignatura($asignatura_id)
    {
        $stmt = $this->pdo->prepare('
            DELETE FROM asignatura
            WHERE id = :asignatura_id
        ');
        $stmt->execute(['asignatura_id' => $asignatura_id]);
        return $stmt->rowCount() > 0 ? "Asignatura dada de baja correctamente." : "No se pudo dar de baja la asignatura.";
    }


    public function obtenerUsuarios()
    {
        $stmt = $this->pdo->query('SELECT * FROM administrador');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerProfesores()
    {
        $stmt = $this->pdo->query('SELECT * FROM profesor');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerAsignaturas()
    {
        $stmt = $this->pdo->query('SELECT * FROM asignatura');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerAlumnos()
    {
        $stmt = $this->pdo->query('SELECT * FROM alumno');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerNiveles()
    {
        $sql = "SELECT * FROM nivel";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerAlumnoPorId($usuario_id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM alumno WHERE id = :usuario_id');
        $stmt->execute(['usuario_id' => $usuario_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function obtenerAsignaturaPorId($asignatura_id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM asignatura WHERE id = :asignatura_id');
        $stmt->execute(['asignatura_id' => $asignatura_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$consultas = new Consultas($pdo);
