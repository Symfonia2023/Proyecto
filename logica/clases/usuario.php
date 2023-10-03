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
    private function validarLogin($login) {
        // Verificar si está en la base de datos
    } 
// --------------------------------------------------------------
    private function validarContrasenia($contrasenia) {
        // Verificar si la contraseña coincide con el login en la base de datos.
    } 

}

?>