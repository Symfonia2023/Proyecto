<?php

include 'usuario.php'; // Se le incluye la clase usuario ya que cada vez que se crea un cliente nuevo se guardan sus datos para la posterior comprobación de login (se implementará en próximas versiones).
include 'cliente.php';

class clienteEmpresa extends cliente { // Clase que hereda atributos
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $nombre_juridico;
    private $RUT;
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct($telefono,$email,$direccion_completa,$autorizacion,$nombre_juridico,$RUT) {
        $this->telefono=$telefono;
        $this->email=$email;
        $this->direccion_completa=$direccion_completa;
        $this->autorizacion=$autorizacion;
        $this->nombre_juridico=$nombre_juridico;
        $this->RUT=$RUT;
    }
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNombreJuridico() {
        return $this->nombre_juridico;
    }
    public function setNombreJuridico($nombre_juridico) {
        $this->nombre_juridico = $nombre_juridico;
    }
// --------------------------------------------------------------
    public function getRUT() {
        return $this->RUT;
    }
    public function setRUT($RUT) {
        $this->RUT = $RUT;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------

}

?>