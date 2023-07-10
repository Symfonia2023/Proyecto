<?php

class comida {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $idAutomatico=1; // Variable para asignar ID's automaticamente.
    private $id_comida;
    private $nombre_comida;
    private $tiempo_elaboracion;
// --------------------------------------------------------------

// /////////////////////////
// CONSTRUCTOR
// ----------------------------------------------------------------------------------------
    public function __construct($nombre_comida,$tiempo_elaboracion) { // No se le agrega el atributo de la clase "id_comida" como parametro porque se lo asignará automaticamente.

        $this->id_comida = self::$idAutomatico; // Asignar la ID automaticamente.
        self::$idAutomatico++; // Incrementar el contador de ID's.

        $this->nombre_comida=$nombre_comida;
        $this->tiempo_elaboracion=$tiempo_elaboracion;
    }
// ----------------------------------------------------------------------------------------

// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getIdComida() {
        return $this->id_comida;
    }
// --------------------------------------------------------------
    public function getNombreComida() {
        return $this->nombre_comida;
    }
    public function setNombreComida($nombre_comida) {
        $this->nombre_comida = $nombre_comida;
    }
// --------------------------------------------------------------
    public function getTiempoElaboracion() {
        return $this->tiempo_elaboracion;
    }
    public function setTiempoElaboracion($tiempo_elaboracion) {
        $this->tiempo_elaboracion = $tiempo_elaboracion;
    }
// --------------------------------------------------------------

// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
public function validarTiempoElaboracion($tiempo_elaboracion) {
    // No puede ser 0 ni menor a.
}
// --------------------------------------------------------------
}


?>