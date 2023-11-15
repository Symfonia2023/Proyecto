<?php
// Verifica si se recibió el idPedido
if (isset($_POST['idPedido'])) {
    // Obtiene el idPedido desde la solicitud POST
    $idPedido = $_POST['idPedido'];

    include_once 'clases/pedido.php';

    // Crea una instancia de la clase Pedido
    $pedido = new Pedido();

    // Llama a la función avanzarEstado con el idPedido
    $pedido->avanzarEstado($idPedido);

    echo json_encode(['success' => true, 'message' => 'Estado avanzado con éxito.']);
} else {
    echo json_encode(['success' => false, 'message' => 'No se proporcionó el idPedido.']);
}
?>
