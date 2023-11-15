<?php

include_once 'clases/pedido.php';

session_start();

$pedido = new Pedido();

$pedidos = array();
$numerosPedidos = $pedido->obtenerTodosLosPedidos();

foreach ($numerosPedidos as $nro_pedido) {
    $pedidoCompleto = $pedido->obtenerPedidoCompleto($nro_pedido);
    
    // Filtrar solo los pedidos con estado "solicitado" o "confirmado"
    if ($pedidoCompleto['estado'] === 'solicitado' || $pedidoCompleto['estado'] === 'confirmado') {
        $pedidos[] = $pedidoCompleto;
    }
}

echo json_encode($pedidos);
?>
