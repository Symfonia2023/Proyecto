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
    public function __construct($login,$contrasenia,$rol) {
        $this->login=$login;
        $this->contrasenia=$contrasenia;
        $this->rol=$rol;
    }
// ----------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->validarLogin($login);
        $this->validarLongitudLogin($login);
        $this->login=$login;
    }
// --------------------------------------------------------------
    public function getContrasenia() {
        return $this->contrasenia;
    }
    public function setContrasenia($contrasenia) {
        $this->validarContrasenia($contrasenia);
        $this->validarLongitudContrasenia($contrasenia);
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
    private function validarLogin($login) {
        // Verificar si está en la base de datos
    } 
// --------------------------------------------------------------
    private function validarContrasenia($contrasenia) {
        // Verificar si la contraseña coincide con el login en la base de datos.
    } 
// --------------------------------------------------------------
    private function validarLongitudLogin($login) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($login); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudContrasenia($contrasenia) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($contrasenia); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 20 || $cantCaracteres < 6) { // La contraseña no puede tener menos de 6 caracteres o mas de 20 caracteres.
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------

}

?>