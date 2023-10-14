<?php

include 'clases/cliente_web.php';
include 'utilidades.php';

$data = file_get_contents("php://input");
$nuevoCliente = json_decode($data);

$direccion_completa = [
    "calle" => $nuevoCliente->calle,
    "nro_puerta" => $nuevoCliente->nro_puerta,
    "esquina" => $nuevoCliente->esquina,
    "barrio" => $nuevoCliente->barrio,
    "bloque" => $nuevoCliente->bloque,
    "apartamento" => $nuevoCliente->apartamento
];

$nombre_completo = [
    "nombre" => $nuevoCliente->nombre,
    "apellido" => $nuevoCliente->apellido
];

unset($formulariosVacios);
$formulariosVacios = [];

////////////////////////////////////
// IFS PARA VALIDAR LOS DATOS

if (validarNombre($nuevoCliente->nombre))
    array_push($formulariosVacios, 'nombre');
if (validarApellido($nuevoCliente->apellido))
    array_push($formulariosVacios, 'apellido');
if (validarEmail($nuevoCliente->email))
    array_push($formulariosVacios, 'email');
if (validarContrasenia($nuevoCliente->contraseña))
    array_push($formulariosVacios, 'contraseña');
if (validarTelefono($nuevoCliente->telefono))
    array_push($formulariosVacios, 'telefono');
if (validarCedula($nuevoCliente->cedula))
    array_push($formulariosVacios, 'cedula');
if (validarCalle($nuevoCliente->calle))
    array_push($formulariosVacios, 'calle');
if (validarNroPuerta($nuevoCliente->nro_puerta))
    array_push($formulariosVacios, 'nroPuerta');
if (validarEsquina($nuevoCliente->esquina))
    array_push($formulariosVacios, 'esquina');
if (validarBarrio($nuevoCliente->barrio))
    array_push($formulariosVacios, 'barrio');
if (validarApartamento($nuevoCliente->apartamento))
    array_push($formulariosVacios, 'apartamento');
if (validarBloque($nuevoCliente->bloque))
    array_push($formulariosVacios, 'bloque');

header('Content-Type: application/json');
echo json_encode($formulariosVacios);

//////////
//////////////////////////////////


// $clienteBase = new cliente($nuevoCliente->telefono, $nuevoCliente->email, $direccion_completa);
// $clienteWeb = new clienteWeb($clienteBase->getTelefono(), $clienteBase->getEmail(), $clienteBase->getDireccionCompleta(), $nuevoCliente->cedula, $nombre_completo);

// $respuesta = $clienteBase;
// $respuestaDos = $clienteWeb;

// header('Content-Type: application/json');
// echo json_encode($respuesta);
// echo json_encode($respuestaDos);

?>
