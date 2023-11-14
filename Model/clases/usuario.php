<?php

class usuario {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $login;
    private $contrasenia;
    private $rol;
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// ----------------------------------------------------------------
    public function __construct($login,$contrasenia) {
        $this->login=$login;
        $this->contrasenia=$contrasenia;

        $this->loginUsuario($login, $contrasenia);
    }
// ----------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login=$login;
    }
// --------------------------------------------------------------
    public function getContrasenia() {
        return $this->contrasenia;
    }
    public function setContrasenia($contrasenia) {
        $this->contrasenia=$contrasenia;
    }
// --------------------------------------------------------------
    public function getRol() {
        return $this->rol;
    }
    public function setRol($rol) {
        $this->rol=$rol;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
private function loginUsuario($login, $contrasenia) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "symfonia_bd";

    // Crear conexión
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Consulta para verificar si el usuario existe
    $sql = "SELECT login, contrasenia, rol FROM usuario WHERE login = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        
        // El usuario existe, ahora se comprueba la contraseña
        $row = $result->fetch_assoc();
        $rol = $row["rol"];
        $_SESSION['rol'] = $rol;

        if ($_SESSION['rol'] === "cliente") {
            // Consulta para obtener el id_cliente desde la tabla cliente
        $queryCliente = "SELECT nro_cliente FROM cliente WHERE email = '$login'";
        $resultCliente = mysqli_query($conn, $queryCliente);

        if ($resultCliente) {
            // Verifica si se encontró un registro
            if (mysqli_num_rows($resultCliente) > 0) {
                // Obtiene el resultado de la consulta
                $rowCliente = mysqli_fetch_assoc($resultCliente);
                $idCliente = $rowCliente['nro_cliente'];

                // Verifica la contraseña
                if ($contrasenia == $row['contrasenia']) {
                    // La contraseña coincide, el usuario puede iniciar sesión
                    $_SESSION['usuario'] = $login;
                    $_SESSION['id'] = $idCliente;
                    return true;
                } else {
                    return false; // Contraseña incorrecta
                }
            } else {
                return false; // Usuario no encontrado en la tabla cliente
            }
        } else {
            return false; // Error en la consulta cliente
        }
    } else {
         // Verifica la contraseña
         if ($contrasenia == $row['contrasenia']) {
            // La contraseña coincide, el usuario puede iniciar sesión
            $_SESSION['usuario'] = $login;
            return true;
        } else {
            return false; // Contraseña incorrecta
        }
    }
        
    } else {
        return false; // Usuario no encontrado en la tabla usuario
    }
}
}



?>