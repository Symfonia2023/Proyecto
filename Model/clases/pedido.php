<?php

// El comando "self::" es para acceder a elementos estáticos de la clase.

class pedido { 
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $metodo_pago; // Se utilizará la API de MercadoPago.
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct() { 
    }
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNroPedido() {
        return $this->nro_pedido;
    }
// --------------------------------------------------------------
    public function getMetodoPago() {
        return $this->metodo_pago;
    }
    public function setMetodoPago($metodo_pago) {
        $this->metodo_pago=$metodo_pago;
    }
// --------------------------------------------------------------

public function realizarPedido($idMenu, $idComidas, $nroCliente) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Inicia la transacción
    mysqli_begin_transaction($conn);

    try {
        // Inserta un nuevo pedido
        $insertPedido = "INSERT INTO pedido (METODO_PAGO) VALUES ('MercadoPago')";
        if (!mysqli_query($conn, $insertPedido)) {
            throw new Exception('Error al insertar en la tabla pedido: ' . mysqli_error($conn));
        }
        $nroPedido = mysqli_insert_id($conn); // Obtiene el ID del último pedido insertado

        // Inserta en la tabla "hace"
        $insertHace = "INSERT INTO hace (NRO_PEDIDO, NRO_CLIENTE, FECHA, ID_SUCURSAL) VALUES ($nroPedido, $nroCliente, NOW(), 1)";
        if (!mysqli_query($conn, $insertHace)) {
            throw new Exception('Error al insertar en la tabla hace: ' . mysqli_error($conn));
        }

        // Itera sobre las idComidas y las inserta en la tabla "contiene"
        foreach ($idComidas as $idComida) {
            $insertContiene = "INSERT INTO contiene (ID_MENU, ID_COMIDA, NRO_PEDIDO, NRO_CLIENTE) VALUES ('$idMenu', '$idComida', '$nroPedido', '$nroCliente')";

            if (!mysqli_query($conn, $insertContiene)) {
                throw new Exception('Error al insertar en la tabla contiene: ' . mysqli_error($conn));
            }
        }

        // Inserta en la tabla "posee"
        $insertPosee = "INSERT INTO posee (NRO_PEDIDO, NOMBRE_ESTADO_PEDIDO, FECHA_INICIO, FECHA_FIN) VALUES ($nroPedido, 'solicitado', NOW(), NULL)";
        if (!mysqli_query($conn, $insertPosee)) {
            throw new Exception('Error al insertar en la tabla posee: ' . mysqli_error($conn));
        }

        // Confirma la transacción
        mysqli_commit($conn);

        echo json_encode("Pedido realizado con éxito.");
        unset($_SESSION["carrito"]);
    } catch (Exception $e) {
        // Revierte la transacción en caso de error
        mysqli_rollback($conn);

        echo json_encode("Error al realizar el pedido: " . $e->getMessage());
    } finally {
        // Cierra la conexión
        mysqli_close($conn);
    }
}

}
?>