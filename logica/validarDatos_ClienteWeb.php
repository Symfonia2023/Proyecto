<?php

include 'clases/cliente_web.php';
include 'utilidades.php';

$data = file_get_contents("php://input");
$nuevoCliente = json_decode($data);

$direccion_completa = [
    "calle" => $nuevoCliente->calle,
    "nro_puerta" => $nuevoCliente->nro_puerta,
    "esquina" => $nuevoCliente->esquina,
    "barrio" => 'Barrio Sur',
    "bloque" => $nuevoCliente->bloque,
    "apartamento" => $nuevoCliente->apartamento
];

$nombre_completo = [
    "nombre" => $nuevoCliente->nombre,
    "apellido" => $nuevoCliente->apellido
];

$formulariosVacios = [];

// ifs para validar la longitud de los datos.
if (validarLongitudNombre($nuevoCliente->nombre))
    array_push($formulariosFacios, 'nombre');
if (validarLongitudApellido($nuevoCliente->apellido))
    array_push($formulariosFacios, 'apellido');
if (validarLongitudBarrio($nuevoCliente->email))
    array_push($formulariosFacios, 'email');


header('Content-Type: application/json');
echo json_encode($formulariosFacios);


// $clienteBase = new cliente($nuevoCliente->telefono, $nuevoCliente->email, $direccion_completa);
// $clienteWeb = new clienteWeb($clienteBase->getTelefono(), $clienteBase->getEmail(), $clienteBase->getDireccionCompleta(), $nuevoCliente->cedula, $nombre_completo);

// $respuesta = $clienteBase;
// $respuestaDos = $clienteWeb;

// header('Content-Type: application/json');
// echo json_encode($respuesta);
// echo json_encode($respuestaDos);

?>
