<?php

include 'clases/cliente_web.php';
include 'utilidades.php';
include_once 'clases/usuario.php';

session_start();
session_unset();

$data = file_get_contents("php://input");
$datos = json_decode($data);
header('Content-Type: application/json');

unset($formulariosVacios);
$formulariosVacios = [];

////////////////////////////////////
// IFS PARA VALIDAR LOS DATOS

if (validarLogin($datos->login))
    array_push($formulariosVacios, 'login');
if (validarContrasenia($datos->contrasenia))
    array_push($formulariosVacios, 'contraseña');

if (empty($formulariosVacios)) {
    $nuevoUsuario = new Usuario($datos->login, $datos->contrasenia);
    if (isset($_SESSION['usuario'])) {
        // El usuario está autenticado
        echo json_encode(0); // Autenticación exitosa
    } else {
        // El usuario no está autenticado
        echo json_encode('ERROR');
    }
} else {
    echo json_encode($formulariosVacios);
    session_destroy();
}

?>
