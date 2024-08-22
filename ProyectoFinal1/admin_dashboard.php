<?php
require 'vendor/autoload.php';
require 'consultas.php';

use Smarty\Smarty;

session_start();

if (!isset($_SESSION['user']) || $_SESSION['user_type'] != 'administrador') {
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

$admin_id = $_SESSION['user']['id'];
$consultas = new Consultas($pdo);

$section = isset($_GET['section']) ? $_GET['section'] : 'alta_usuario';
$smarty->assign('section', $section);

$smarty->assign('user', $_SESSION['user']);

switch ($section) {
    case 'alta_usuario':
        $niveles = $consultas->obtenerNiveles();
        $smarty->assign('niveles', $niveles);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $nivel_id = $_POST['nivel']; 
            $mensaje = $consultas->darAltaAlumno($login, $password, $nombre, $apellidos, $nivel_id);
            $smarty->assign('mensaje', $mensaje);
        }
        break;

    case 'baja_usuario':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario_id = $_POST['usuario_id'];
            $mensaje = $consultas->darBajaUsuario($usuario_id);
            $smarty->assign('mensaje', $mensaje);
        }
        $usuarios = $consultas->obtenerAlumnos();
        $smarty->assign('usuarios', $usuarios);
        break;

    case 'modificar_usuario':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usuario_id = $_POST['usuario_id'] ?? '';
            $login = $_POST['login'] ?? '';
            $password = $_POST['password'] ?? '';
            $nombre = $_POST['nombre'] ?? '';
            $apellidos = $_POST['apellidos'] ?? '';
            $nivel_id = $_POST['nivel_id'] ?? '';

            if ($usuario_id) {
                $mensaje = $consultas->modificarAlumno($usuario_id, $login, $password, $nombre, $apellidos, $nivel_id);
                $smarty->assign('mensaje', $mensaje);
            }
        }

        $usuarios = $consultas->obtenerAlumnos(); 
        $niveles = $consultas->obtenerNiveles(); 
        $smarty->assign('usuarios', $usuarios);
        $smarty->assign('niveles', $niveles);

        if (isset($_GET['usuario_id'])) {
            $usuario_id = $_GET['usuario_id'];
            $alumno = $consultas->obtenerAlumnoPorId($usuario_id);
            $smarty->assign('alumno', $alumno);
        }

        break;

    case 'alta_asignatura':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $_POST['nombre'];
            $nivel_id = $_POST['nivel']; 
            $profesor_id = $_POST['profesor_id'];
            $mensaje = $consultas->darAltaAsignatura($nombre, $nivel_id, $profesor_id);
            $smarty->assign('mensaje', $mensaje);
        }
        $profesores = $consultas->obtenerProfesores();
        $niveles = $consultas->obtenerNiveles(); 
        $smarty->assign('profesores', $profesores);
        $smarty->assign('niveles', $niveles); 
        break;


    case 'baja_asignatura':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $asignatura_id = $_POST['asignatura_id'];
            $mensaje = $consultas->darBajaAsignatura($asignatura_id);
            $smarty->assign('mensaje', $mensaje);
        }
        $asignaturas = $consultas->obtenerAsignaturas();
        $smarty->assign('asignaturas', $asignaturas);
        break;

        case 'modificar_asignatura':
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $asignatura_id = $_POST['asignatura_id'] ?? '';
                $nombre = $_POST['nombre'] ?? '';
                $nivel_id = $_POST['nivel_id'] ?? '';
                $profesor_id = $_POST['profesor_id'] ?? '';
        
                if ($asignatura_id) {
                    $mensaje = $consultas->modificarAsignatura($asignatura_id, $nombre, $nivel_id, $profesor_id);
                    $smarty->assign('mensaje', $mensaje);
                }
            }
        
            $asignaturas = $consultas->obtenerAsignaturas();
            $profesores = $consultas->obtenerProfesores();
            $niveles = $consultas->obtenerNiveles();
            $smarty->assign('asignaturas', $asignaturas);
            $smarty->assign('profesores', $profesores);
            $smarty->assign('niveles', $niveles);
        
            if (isset($_GET['asignatura_id'])) {
                $asignatura_id = $_GET['asignatura_id'];
                $asignatura = $consultas->obtenerAsignaturaPorId($asignatura_id);
                $smarty->assign('asignatura', $asignatura);
                $smarty->assign('asignatura_selected', $asignatura_id); 
            }
            break;
        
    case 'matricular_alumno':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $alumno_id = $_POST['alumno_id'] ?? '';
            $asignatura_id = $_POST['asignatura_id'] ?? '';

            if ($alumno_id && $asignatura_id) {
                $mensaje = $consultas->matricularAlumno($alumno_id, $asignatura_id);
                $smarty->assign('mensaje', $mensaje);
            } else {
                $smarty->assign('mensaje', 'Por favor, seleccione un alumno y una asignatura.');
            }
        }

        $alumnos = $consultas->obtenerAlumnos();
        $asignaturas = $consultas->obtenerAsignaturas();
        $smarty->assign('alumnos', $alumnos);
        $smarty->assign('asignaturas', $asignaturas);
        break;


    case 'cargar_datos_asignatura':
        if (isset($_GET['asignatura_id'])) {
            $asignatura_id = $_GET['asignatura_id'];
            $asignatura = $consultas->obtenerAsignaturaPorId($asignatura_id);
            header('Content-Type: application/json');
            echo json_encode($asignatura);
        }
        break;
}

$smarty->display('admin_dashboard.tpl');
