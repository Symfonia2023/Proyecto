<?php
include 'clases/pedido.php';
include 'clases/menu.php';

session_start();
$data = json_decode(file_get_contents("php://input"), true);

if (!isset($_SESSION["usuario"])) {
    echo json_encode(1);
} else {
    $nroCliente = $_SESSION["id"];
    $carrito = $_SESSION['carrito'];
    
    $menu = new Menu();
    
    foreach ($carrito as $itemCarrito) {
        $idMenu = $itemCarrito['id'];
        $cantidadMenu = $itemCarrito['cantidad'];

        for ($i = 0; $i < $cantidadMenu; $i++) {
            // Obtener las combinaciones de idMenu e idComida
            $idComidas = $menu->obtenerIdComidas($idMenu);

            // Crear instancia de Pedido y realizar el pedido
            $pedidoObj = new Pedido();
            $pedidoObj->realizarPedido($idMenu, $idComidas, $nroCliente);
        }
    }
}
?>
