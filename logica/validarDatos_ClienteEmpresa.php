<?php

include 'clases/cliente_empresa.php';
include 'utilidades.php';

$data = file_get_contents("php://input");
$nuevoCliente = json_decode($data);
header('Content-Type: application/json');


$direccion_completa = [
    "calle" => $nuevoCliente->calle,
    "nro_puerta" => $nuevoCliente->nro_puerta,
    "esquina" => $nuevoCliente->esquina,
    "barrio" => $nuevoCliente->barrio,
    "bloque" => $nuevoCliente->bloque,
    "apartamento" => $nuevoCliente->apartamento
];

unset($formulariosVacios);
$formulariosVacios = [];

////////////////////////////////////
// IFS PARA VALIDAR LOS DATOS


if (validarNombre($nuevoCliente->nombreEmpresa))
    array_push($formulariosVacios, 'nombre-empresa');
if (validarRUT($nuevoCliente->RUT))
    array_push($formulariosVacios, 'rut');
if (validarEmail($nuevoCliente->email))
    array_push($formulariosVacios, 'email');
if (validarContrasenia($nuevoCliente->contraseña))
    array_push($formulariosVacios, 'contraseña');
if (validarTelefono($nuevoCliente->telefono))
    array_push($formulariosVacios, 'telefono');
if (validarCalle($nuevoCliente->calle))
    array_push($formulariosVacios, 'calle');
if (validarNroPuerta($nuevoCliente->nro_puerta))
    array_push($formulariosVacios, 'numPuerta');
if (validarEsquina($nuevoCliente->esquina))
    array_push($formulariosVacios, 'esquina');
if (validarBarrio($nuevoCliente->barrio))
    array_push($formulariosVacios, 'barrio');
if (validarApartamento($nuevoCliente->apartamento))
    array_push($formulariosVacios, 'apartamento');
if (validarBloque($nuevoCliente->bloque))
    array_push($formulariosVacios, 'bloque-apto');

if (empty($formulariosVacios)) {
    $clienteBase = new cliente($nuevoCliente->telefono, $nuevoCliente->email, $direccion_completa, $nuevoCliente->contraseña);
    $clienteEmpresa = new clienteEmpresa($clienteBase->getTelefono(), $clienteBase->getEmail(), $clienteBase->getDireccionCompleta(), $nuevoCliente->nombreEmpresa, $nuevoCliente->RUT, $nuevoCliente->contraseña);
} else {
    echo json_encode($formulariosVacios);
}

?>
