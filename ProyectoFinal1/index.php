<?php
require 'vendor/autoload.php';
require 'consultas.php';  

use Smarty\Smarty;

session_start();

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('configs/');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $login = trim($_POST['login']);
    $clave = trim($_POST['clave']);

    if (!isset($pdo)) {
        die("Error: No se pudo establecer la conexión a la base de datos.");
    }

    $table = '';
    switch ($type) {
        case 'administrador':
            $table = 'administrador';
            break;
        case 'profesor':
            $table = 'profesor';
            break;
        case 'alumno':
            $table = 'alumno';
            break;
        default:
            die('Tipo de usuario no válido.');
    }

    $query = "SELECT * FROM $table WHERE login = :login AND clave = :clave";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':clave', $clave);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user'] = $user;
        $_SESSION['user_type'] = $type;

        $smarty->assign('user', $user);

        if ($type == 'alumno') {
            $alumno_id = $user['id'];
            $consultas = new Consultas($pdo);

            $asignaturas = $consultas->obtenerAsignaturasAlumno($alumno_id);
            $smarty->assign('asignaturas', $asignaturas);

            if (isset($_POST['asignatura_id'])) {
                $asignatura_id = $_POST['asignatura_id'];
                $horario = $consultas->obtenerHorarioAsignatura($asignatura_id);
                $smarty->assign('horario', $horario);
            }

            $alumnos_compartidos = $consultas->obtenerAlumnosCompartidos($alumno_id);
            $smarty->assign('alumnos_compartidos', $alumnos_compartidos);

            $smarty->display('alumno/base.tpl');
        } else {
            switch ($type) {
                case 'administrador':
                    $smarty->display('admin/base.tpl');
                    break;
                case 'profesor':
                    $smarty->display('profesor/base.tpl');
                    break;
            }
        }
        exit();
    } else {
        $smarty->assign('error', 'Usuario o contraseña incorrectos.');
    }
}

$smarty->assign('user', $_SESSION['user'] ?? null);
$smarty->assign('user_type', $_SESSION['user_type'] ?? null);
$smarty->display('layout.tpl');
