<?php

include 'clases/cliente_web.php';

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

$clienteBase = new cliente($nuevoCliente->telefono, $nuevoCliente->email, $direccion_completa);
$clienteWeb = new clienteWeb($clienteBase->getTelefono(), $clienteBase->getEmail(), $clienteBase->getDireccionCompleta(), $nuevoCliente->cedula, $nombre_completo);

$respuesta = $clienteBase;
$respuestaDos = $clienteWeb;

header('Content-Type: application/json');
echo json_encode($respuesta);
echo json_encode($respuestaDos);

?>
