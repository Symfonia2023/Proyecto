<?php

include 'usuario.php'; // Se le incluye la clase usuario ya que cada vez que se crea un cliente nuevo se guardan sus datos para la posterior comprobación de login (se implementará en próximas versiones).
include 'cliente.php';

class clienteWeb extends cliente { // Clase que hereda atributos.
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $CI;
    private $nombre_completo=[
        "nombre" => '',
        "apellido" => ''
    ];
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct($telefono, $email, $direccion_completa, $CI,$nombre_completo, $contrasena) {

            $this->setTelefono($telefono);
            $this->setEmail($email);
            $this->setDireccionCompleta($direccion_completa['calle'], $direccion_completa['nro_puerta'], $direccion_completa['esquina'], $direccion_completa['barrio'], $direccion_completa['bloque'], $direccion_completa['apartamento']);
            $this->setAutorizacion();
            $this->setCI($CI);
            $this->setNombreCompleto($nombre_completo['nombre'], $nombre_completo['apellido']);

            $this->registrarClienteWeb();
    }
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getCI() {
        return $this->CI;
    }
    public function setCI($CI) {
        $this->CI = $CI;
    }
// --------------------------------------------------------------
    public function getNombreCompleto() {
        return $this->nombre_completo;
    }
    public function setNombreCompleto($nombre, $apellido) {
        $this->nombre_completo['nombre'] = $nombre;
        $this->nombre_completo['apellido'] = $apellido;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------

private function registrarClienteWeb() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificar conexión
    if (!$conn) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Inicia la transacción (para poder utilizar rollback y commit)
    mysqli_begin_transaction($conn);

    try {
        // Datos del clienteWeb
        $telefono = $this->getTelefono();
        $email = $this->getEmail();
        $direccionCompleta = $this->getDireccionCompleta();
        $CI = $this->getCI();
        $nombreCompleto = $this->getNombreCompleto();
        $contrasena = $this->getContraseña();

        // Insertar datos del cliente en la tabla clientes.
        $sqlCliente = "INSERT INTO cliente (email, autorizacion, calle, nro_puerta, esquina, barrio, bloque, apartamento) VALUES ('$email', 0, '{$direccionCompleta['calle']}', '{$direccionCompleta['nro_puerta']}', '{$direccionCompleta['esquina']}', '{$direccionCompleta['barrio']}', '{$direccionCompleta['bloque']}', '{$direccionCompleta['apartamento']}')";

        // Ejecutar la consulta
        if ($conn->query($sqlCliente) === TRUE) {
            // Obtener el último ID utilizado
            $nuevoID = mysqli_insert_id($conn);

            // Se crea el insert
            $sqlClienteTelefono = "INSERT INTO cliente_telefono (nro_cliente, telefono) VALUES ('$nuevoID', '$telefono')";

            // Se comprueba el insert
            if ($conn->query($sqlClienteTelefono) === TRUE) {

                // Se crea el insert
                $sqlClienteWeb = "INSERT INTO web (nro_cliente, CI, primer_nombre, primer_apellido) VALUES ('$nuevoID', '$CI', '{$nombreCompleto['nombre']}', '{$nombreCompleto['apellido']}')";

                // Se comprueba el insert
                if ($conn->query($sqlClienteWeb) === TRUE) {

                    // Se crea el insert
                    $sqlUsuario = "INSERT INTO usuario (login, rol, contrasenia) VALUES ('{$nombreCompleto['nombre']}', 'cliente', '{$contrasena}')";

                    // Se comprueba el insert
                    if ($conn->query($sqlUsuario) === TRUE) {
                        // Confirmar la transacción si todo está bien
                        mysqli_commit($conn);
                        echo json_encode(0);
                    } else {
                        throw new Exception("Error al insertar Usuario: " . $conn->error);
                    }
                } else {
                    throw new Exception("Error al insertar ClienteWeb: " . $conn->error);
                }
            } else {
                throw new Exception("Error al insertar ClienteTelefono: " . $conn->error);
            }
        } else {
            throw new Exception("Error al insertar Cliente: " . $conn->error);
        }
    } catch (Exception $e) {
        // Si hay una excepcion, revierte la transacción
        mysqli_rollback($conn);
        echo "Error: " . $e->getMessage();
    } finally {
        // Cierra la conexión
        mysqli_close($conn);
    }
}


}
?>