<?php
require 'vendor/autoload.php';
require 'consultas.php';

use Smarty\Smarty;

session_start();

if (!isset($_SESSION['user']) || $_SESSION['user_type'] != 'alumno') {
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

$alumno_id = $_SESSION['user']['id'];
$consultas = new Consultas($pdo);

$section = isset($_GET['section']) ? $_GET['section'] : 'horario';
$smarty->assign('section', $section);

$smarty->assign('user', $_SESSION['user']);

switch ($section) {
    case 'horario':
        $asignaturas = $consultas->obtenerAsignaturasAlumno($alumno_id);
        $smarty->assign('asignaturas', $asignaturas);

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['consultar_horario'])) {
            $asignatura_id = $_POST['asignatura_id'];
            $horario = $consultas->obtenerHorarioAsignatura($asignatura_id);
            $smarty->assign('horario', $horario);
        }
        break;

    case 'alumnos':
        $alumnos_compartidos = $consultas->obtenerAlumnosCompartidos($alumno_id);
        $smarty->assign('alumnos_compartidos', $alumnos_compartidos);
        break;

    case 'profesores':
        $profesores = $consultas->obtenerProfesoresAlumno($alumno_id);
        $smarty->assign('profesores', $profesores);
        break;

    case 'notas':
        $asignaturas = $consultas->obtenerAsignaturasConNotas($alumno_id);
        $smarty->assign('asignaturas', $asignaturas);

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['consultar_notas'])) {
            $asignatura_id = $_POST['asignatura_id'];
            $notas = $consultas->obtenerNotasAsignatura($alumno_id, $asignatura_id);
            $smarty->assign('notas', $notas);
        }

        break;
    case 'faltas':
        $asignaturas = $consultas->obtenerAsignaturasAlumno($alumno_id);
        $smarty->assign('asignaturas', $asignaturas);

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['consultar_faltas'])) {
            $asignatura_id = $_POST['asignatura_id'];
            $faltas = $consultas->obtenerFaltasAsistencia($alumno_id, $asignatura_id);
            $smarty->assign('faltas', $faltas);
        }
        break;
}

$smarty->display('alumno_dashboard.tpl');
