<?php
session_start();

// Verifica si la variable de sesión 'carrito' está definida y, si no, inicialízala
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Decodifica los datos JSON recibidos desde la solicitud AJAX
$data = json_decode(file_get_contents("php://input"), true);

// Verifica si los datos del menú son válidos
if (isset($data['id'], $data['nombre'], $data['precio'])) {
    // Busca si el menú ya está en el carrito
    $menuExistente = array_search($data['id'], array_column($_SESSION['carrito'], 'id'));

    if ($menuExistente !== false) {
        // Si el menú ya está en el carrito, incrementa la cantidad
        $_SESSION['carrito'][$menuExistente]['cantidad'] += 1;
    } else {
        // Si el menú no está en el carrito, agrégalo con cantidad 1
        $_SESSION['carrito'][] = [
            'id' => $data['id'],
            'nombre' => $data['nombre'],
            'precio' => $data['precio'],
            'cantidad' => 1
        ];
    }

    // Devuelve true si se agregó correctamente
    echo json_encode(true);
} else {
    // Devuelve false si no se pudo agregar
    echo json_encode(false);
}
?>