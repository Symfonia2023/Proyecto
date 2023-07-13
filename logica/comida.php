<?php

class comida {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $idAutomatico=1; // Variable para asignar ID's automaticamente.
    private $id_comida;
    private $nombre_comida;
    private $tiempo_elaboracion;
    private $tipo_dieta;
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// ----------------------------------------------------------------------------------------
    public function __construct($nombre_comida, $tiempo_elaboracion, $tipo_dieta) { // No se le agrega el atributo de la clase "id_comida" como parametro porque se lo asignará automaticamente.

        $this->id_comida = self::$idAutomatico; // Asignar la ID automaticamente.
        self::$idAutomatico++; // Incrementar el contador de ID's.

        $this->nombre_comida=$nombre_comida;
        $this->tiempo_elaboracion=$tiempo_elaboracion;
        $this->tipo_dieta=$tipo_dieta;
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
        $this->validarTiempoElaboracion($tiempo_elaboracion);
        $this->tiempo_elaboracion = $tiempo_elaboracion;
    }
// --------------------------------------------------------------
    public function getTipoDieta() {
        return $this->tipo_dieta;
    }
    public function setTipoDieta($tipo_dieta) {
        $this->validarTipoDieta($tipo_dieta);
        $this->tipo_dieta=$tipo_dieta;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
    private function validarTiempoElaboracion($tiempo_elaboracion) {
        // No puede ser 0 ni menor a.
    }
// --------------------------------------------------------------
    private function validarTipoDieta($tipo_dieta) {
        // Solo puede ser uno de los que ya están definidos; dieta vegetariana, dieta ovolácteovegetariana, dieta ovovegetariana, dieta vegana o dieta celíaca.
    }
// --------------------------------------------------------------

}

?>