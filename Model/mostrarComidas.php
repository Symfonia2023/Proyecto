<?php
include 'clases/menu.php';

$data = json_decode(file_get_contents("php://input"), true);

$idMenu = $data['idMenu'];

$menu = new Menu();
$comidas = $menu->obtenerNombresComidasMenu($idMenu);

echo json_encode($comidas);

?>