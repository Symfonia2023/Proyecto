<?php
session_start();

// Verifica si se ha enviado un ID de menú y una cantidad
if (isset($_POST['id'], $_POST['cantidad'])) {
    $menuId = $_POST['id'];
    $cantidad = $_POST['cantidad'];

    // Verifica si la variable de sesión 'carrito' está definida
    if (isset($_SESSION['carrito'])) {
        // Busca el menú con el ID proporcionado
        foreach ($_SESSION['carrito'] as $key => $menu) {
            if ($menu['id'] == $menuId) {
                // Reduzca la cantidad en 1 o elimine el elemento si la cantidad es 0
                $_SESSION['carrito'][$key]['cantidad'] = max(0, $cantidad - 1);
                
                // Elimina el elemento del carrito si la cantidad es 0
                if ($_SESSION['carrito'][$key]['cantidad'] == 0) {
                    unset($_SESSION['carrito'][$key]);
                }

                echo "true";
                exit();
            }
        }
    }
}

echo "false";
?>
