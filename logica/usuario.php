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
    public function __construct($login,$contrasena,$rol) {
        $this->login=$login;
        $this->contrasenia=$contrasena;
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
    public function getContrasena() {
        return $this->contrasenia;
    }
    public function setContrasena($contrasenia) {
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
public function validarLogin($login) {
    // Verificar si está en la base de datos
} 
// --------------------------------------------------------------
public function validarContrasena($contrasena) {
    // Verificar si la contraseña coincide con el login en la base de datos.
} 
// --------------------------------------------------------------
}

?>