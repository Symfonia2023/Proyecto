<?php

class usuario {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $login;
    private $contrasena;
    private $rol;
// --------------------------------------------------------------

// /////////////////////////
// CONSTRUCTOR
// ----------------------------------------------------------------
    public function __construct($login,$contrasena,$rol) {
        $this->login=$login;
        $this->contrasena=$contrasena;
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
        return $this->contrasena;
    }
    public function setContrasena($contrasena) {
        $this->contrasena=$contrasena;
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

} 
// --------------------------------------------------------------
public function validarContrasena($contrasena) {

} 
// --------------------------------------------------------------
}





















?>