<?php
require 'vendor/autoload.php';
require 'consultas.php';

use Smarty\Smarty;

session_start();

if (!isset($_SESSION['user']) || $_SESSION['user_type'] != 'profesor') {
    die('Acceso no autorizado.');
}

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header('Location: /');
    exit;
}

$smarty = new Smarty();
$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setCacheDir('cache/');
$smarty->setConfigDir('configs/');

$profesor_id = $_SESSION['user']['id'];
$consultas = new Consultas($pdo);

$section = isset($_GET['section']) ? $_GET['section'] : 'alumnos';
$smarty->assign('section', $section);

$smarty->assign('user', $_SESSION['user']);

switch ($section) {
    case 'listado_alumnos':
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['asignatura_id'])) {
            $asignatura_id = $_POST['asignatura_id'];
            $alumnos = $consultas->obtenerAlumnosAsignatura($asignatura_id);
            $smarty->assign('alumnos', $alumnos);
        }
        $asignaturas = $consultas->obtenerAsignaturasProfesor($profesor_id);
        $smarty->assign('asignaturas', $asignaturas);
        break;

    case 'listado_profesores':
        $profesores = $consultas->obtenerProfesoresColegio();
        $smarty->assign('profesores', $profesores);
        break;

    case 'gestion_notas':
        $asignatura_id = isset($_POST['asignatura_id']) ? $_POST['asignatura_id'] : null;
        $alumnos = [];
        $mensaje_exito = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($asignatura_id) {
                if (isset($_POST['notas'])) {
                    foreach ($_POST['notas'] as $alumno_id => $nota) {
                        $consultas->actualizarNota($alumno_id, $asignatura_id, $nota);
                    }

                    $mensaje_exito = 'Las notas se han actualizado correctamente.';
                }

                $alumnos = $consultas->obtenerNotasPorAsignatura($asignatura_id);
            }
        } else {
            if (isset($_GET['asignatura_id'])) {
                $asignatura_id = $_GET['asignatura_id'];
                $alumnos = $consultas->obtenerNotasPorAsignatura($asignatura_id);
            }
        }

        $asignaturas = $consultas->obtenerAsignaturasProfesor($profesor_id);
        $smarty->assign('asignaturas', $asignaturas);
        $smarty->assign('asignatura_id', $asignatura_id);
        $smarty->assign('alumnos', $alumnos);
        $smarty->assign('mensaje_exito', $mensaje_exito);
        break;

        case 'gestion_faltas':
            $asignatura_id = isset($_POST['asignatura_id']) ? $_POST['asignatura_id'] : null;
            $alumnos = [];
            $message = null;
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $accion = $_GET['accion'] ?? '';
        
                if ($accion === 'actualizar') {
                    $asignatura_id = $_POST['asignatura_id'];
                    $faltas = $_POST['faltas'];
                    $fechas = $_POST['fechas'] ?? [];  
                    $justificadas = $_POST['justificado'] ?? [];  
        
                    foreach ($faltas as $alumno_id => $cantidad_faltas) {
                        if ($cantidad_faltas > 0) {
                            $fecha = $fechas[$alumno_id] ?? date('Y-m-d');  
                            $justificada = $justificadas[$alumno_id] ?? 'No';  
                            $consultas->actualizarFalta($alumno_id, $asignatura_id, $cantidad_faltas, $justificada, $fecha);
                        }
                    }
        
                    $message = "Faltas actualizadas correctamente.";
                } elseif ($accion === 'registrar') {
                    $alumno_id = $_POST['alumno_id'];
                    $asignatura_id = $_POST['asignatura_id'];
                    $falta = $_POST['falta'];
                    $fecha = $_POST['fecha'];  
                    $justificada = $_POST['justificado'] ?? 'No';  
        
                    if ($falta > 0) {
                        $consultas->actualizarFalta($alumno_id, $asignatura_id, $falta, $justificada, $fecha);
                        $message = "Nueva falta registrada correctamente.";
                    }
                }
            }
        
            $asignaturas = $consultas->obtenerAsignaturasProfesor($profesor_id);
        
            if ($asignatura_id) {
                $alumnos = $consultas->obtenerAlumnosPorAsignatura($asignatura_id);
            }
        
            $smarty->assign('asignaturas', $asignaturas);
            $smarty->assign('alumnos', $alumnos);
            $smarty->assign('asignatura_id', $asignatura_id);
            $smarty->assign('message', $message);
            break;
        
}

$smarty->display('profesor_dashboard.tpl');
