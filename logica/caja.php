<?php

class estado {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $idAutomatico=1; // Variable para asignar ID's automaticamente.
    private $id_caja;
// --------------------------------------------------------------

// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct() {
        $this->id_caja = self::$idAutomatico; // Asignar la ID automaticamente.
        self::$idAutomatico++; // Incrementar el contador de ID's.
    }
// --------------------------------------------------------------

// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getCaja() {
        return $this->id_caja;
    }
// --------------------------------------------------------------
}