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

public function obtenerTodosLosPedidos() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    $query = "SELECT nro_pedido FROM pedido";
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if ($result) {
        $numerosPedidos = array();

        // Recorrer los resultados y almacenar los números de pedido en el array
        while ($row = mysqli_fetch_assoc($result)) {
            $numerosPedidos[] = $row['nro_pedido'];
        }

        // Liberar resultados
        mysqli_free_result($result);

        // Cerrar la conexión
        mysqli_close($conn);

        return $numerosPedidos;
    } else {
        echo "Error en la consulta de todos los pedidos: " . mysqli_error($conn);
    }

    // Cerrar la conexión en caso de error
    mysqli_close($conn);
    return null; // O maneja el error de otra manera según tu lógica de la aplicación
}

public function obtenerPedidoCompleto($nro_pedido) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Consultar el ID del cliente que hizo el pedido
    $queryCliente = "SELECT nro_cliente FROM hace WHERE nro_pedido = $nro_pedido";
    $resultCliente = mysqli_query($conn, $queryCliente);

    // Verificar si la consulta fue exitosa
    if ($resultCliente) {
        $rowCliente = mysqli_fetch_assoc($resultCliente);
        $nro_cliente = $rowCliente['nro_cliente'];

        // Consultar las comidas del pedido
        $queryComidas = "SELECT id_comida FROM contiene WHERE nro_pedido = $nro_pedido AND nro_cliente = $nro_cliente";
        $resultComidas = mysqli_query($conn, $queryComidas);

        // Verificar si la consulta fue exitosa
        if ($resultComidas) {
            $comidas = array();
            while ($rowComida = mysqli_fetch_assoc($resultComidas)) {
                // Consultar el nombre de la comida
                $id_comida = $rowComida['id_comida'];
                $queryNombreComida = "SELECT nombre_comida FROM comida WHERE id_comida = $id_comida";
                $resultNombreComida = mysqli_query($conn, $queryNombreComida);

                // Verificar si la consulta fue exitosa
                if ($resultNombreComida) {
                    $rowNombreComida = mysqli_fetch_assoc($resultNombreComida);
                    $nombreComida = $rowNombreComida['nombre_comida'];

                    // Agregar el nombre de la comida al arreglo $comidas
                    $comidas[] = $nombreComida;

                    // Liberar resultado del nombre de la comida
                    mysqli_free_result($resultNombreComida);
                } else {
                    echo "Error en la consulta del nombre de la comida: " . mysqli_error($conn);
                }
            }

            // Consultar el ID del menú
            $queryMenu = "SELECT id_menu FROM contiene WHERE nro_pedido = $nro_pedido AND nro_cliente = $nro_cliente LIMIT 1";
            $resultMenu = mysqli_query($conn, $queryMenu);

            // Verificar si la consulta fue exitosa
            if ($resultMenu) {
                $rowMenu = mysqli_fetch_assoc($resultMenu);
                $id_menu = $rowMenu['id_menu'];

                // Consultar el nombre del menú y el precio
                $queryMenuInfo = "SELECT nombre_menu, precio FROM menu WHERE id_menu = $id_menu";
                $resultMenuInfo = mysqli_query($conn, $queryMenuInfo);

                // Verificar si la consulta fue exitosa
                if ($resultMenuInfo) {
                    $rowMenuInfo = mysqli_fetch_assoc($resultMenuInfo);

                    // Construir el pedido completo
                    $pedidoCompleto = array(
                        'idPedido' => $nro_pedido,
                        'idMenu' => $id_menu,
                        'nombreMenu' => $rowMenuInfo['nombre_menu'],
                        'comidas' => $comidas,
                        'estado' => 'EstadoDelPedido', // Reemplaza con el estado real del pedido
                        'precio' => $rowMenuInfo['precio']
                    );

                    // Consultar el estado del pedido en la tabla 'posee'
                    $queryEstadoPedido = "SELECT nombre_estado_pedido FROM posee WHERE nro_pedido = $nro_pedido";
                    $resultEstadoPedido = mysqli_query($conn, $queryEstadoPedido);

                    // Verificar si la consulta fue exitosa
                    if ($resultEstadoPedido) {
                        $rowEstadoPedido = mysqli_fetch_assoc($resultEstadoPedido);
                        $estadoPedido = $rowEstadoPedido['nombre_estado_pedido'];

                        // Agregar el estado del pedido al arreglo $pedidoCompleto
                        $pedidoCompleto['estado'] = $estadoPedido;

                        // Liberar resultado del estado del pedido
                        mysqli_free_result($resultEstadoPedido);
                    } else {
                        echo "Error en la consulta del estado del pedido: " . mysqli_error($conn);
                    }

                    // Liberar resultados
                    mysqli_free_result($resultMenuInfo);
                } else {
                    echo "Error en la consulta de información del menú: " . mysqli_error($conn);
                }

                // Liberar resultado del menú
                mysqli_free_result($resultMenu);
            } else {
                echo "Error en la consulta del ID del menú: " . mysqli_error($conn);
            }

            // Liberar resultados de comidas
            mysqli_free_result($resultComidas);
        } else {
            echo "Error en la consulta de comidas: " . mysqli_error($conn);
        }

        // Liberar resultado del cliente
        mysqli_free_result($resultCliente);
    } else {
        echo "Error en la consulta del ID del cliente: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);

    // Retornar el pedido completo
    return $pedidoCompleto;
}

public function rechazarPedido($idPedido) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Obtener la fecha actual en el formato "año-mes-día"
    $fechaFin = date("Y-m-d");

    // Actualizar la fecha_fin en la tabla posee
    $updatePosee = "UPDATE posee SET nombre_estado_pedido = 'rechazado', fecha_fin = '$fechaFin' WHERE nro_pedido = $idPedido AND nombre_estado_pedido = 'solicitado'";

    if (mysqli_query($conn, $updatePosee)) {
        // Éxito
        echo json_encode(['success' => true, 'message' => 'Pedido rechazado con éxito.', 'fechaActual' => $fechaFin]);
    } else {
        // Error
        echo json_encode(['success' => false, 'message' => 'Error al rechazar el pedido: ' . mysqli_error($conn)]);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}

public function avanzarEstado($idPedido) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar la conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Obtener la fecha actual en el formato "año-mes-día"
    $fechaActual = date("Y-m-d");

    // Obtener el estado actual del pedido
    $queryEstadoActual = "SELECT nombre_estado_pedido FROM posee WHERE nro_pedido = $idPedido ORDER BY fecha_inicio DESC LIMIT 1";
    $resultEstadoActual = mysqli_query($conn, $queryEstadoActual);

    if ($resultEstadoActual) {
        $rowEstadoActual = mysqli_fetch_assoc($resultEstadoActual);
        $estadoActual = $rowEstadoActual['nombre_estado_pedido'];

        // Definir el nuevo estado según la lógica deseada
        $nuevoEstado = '';

        switch ($estadoActual) {
            case 'solicitado':
                $nuevoEstado = 'confirmado';
                break;
            case 'confirmado':
                $nuevoEstado = 'enviado';
                break;
            case 'enviado':
                $nuevoEstado = 'entregado';
                break;
            // Agrega más casos según sea necesario

            default:
                // Estado no reconocido o pedido ya entregado
                echo json_encode(['success' => false, 'message' => 'No se puede avanzar más en el estado.']);
                return;
        }

        // Modificar la línea actual (fecha_fin y fecha_inicio) en donde tiene el estado solicitado
        $updateEstadoActual = "UPDATE posee SET fecha_fin = '$fechaActual', fecha_inicio = '$fechaActual' WHERE nro_pedido = $idPedido AND nombre_estado_pedido = '$estadoActual'";
        mysqli_query($conn, $updateEstadoActual);

        // Insertar una nueva línea con el nuevo estado y fecha_inicio
        $insertNuevoEstado = "INSERT INTO posee (nro_pedido, nombre_estado_pedido, fecha_inicio) VALUES ($idPedido, '$nuevoEstado', '$fechaActual')";
        mysqli_query($conn, $insertNuevoEstado);

        echo json_encode(['success' => true, 'message' => 'Estado avanzado con éxito.']);
    } else {
        // Error al obtener el estado actual
        echo json_encode(['success' => false, 'message' => 'Error al obtener el estado actual: ' . mysqli_error($conn)]);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}



}
?>