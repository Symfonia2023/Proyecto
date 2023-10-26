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
        
            if ($contrasenia == $row['contrasenia']) {
                // La contraseña coincide, el usuario puede iniciar sesión
                $_SESSION['usuario'] = $login;
                $_SESSION['rol'] = $rol;
                return true;
            } else {
                return false; // Contraseña incorrecta
            }
        } else {
            return false; // Usuario no encontrado
        }        
    }
// --------------------------------------------------------------

}

?>