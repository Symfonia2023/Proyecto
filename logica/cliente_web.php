<?php

include 'cliente.php';

class clienteWeb extends cliente { // Clase HIJO
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
    public function __construct($telefono,$email,$direccion_completa,$autorizacion,$CI,$nombre_completo) {

        $this->nro_cliente = self::$nroAutomatico; // Asignar el nro automaticamente.
        self::$nroAutomatico++; // Incrementar el contador de nroAutomatico.

        $this->telefono=$telefono;
        $this->email=$email;
        $this->direccion_completa=$direccion_completa;
        $this->autorizacion=$autorizacion;
        $this->CI=$CI;
        $this->nombre_completo=$nombre_completo;
    }
// --------------------------------------------------------------

// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getCI() {
        return $this->CI;
    }
    public function setCI($CI) {
        $this->validarCI($CI);
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
    public function validarCI($CI) {
        $cantCaracteres = strlen($CI);
        if ($cantCaracteres != 8) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------


}

?>