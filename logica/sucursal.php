<?php

class sucursal {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $nro_sucursal; // Las sucursales ya están definidas; 1, 2, 3, 4, 5, 6 y 7.
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNroSucursal() {
        return $this->nro_sucursal;
    }
    public function setNroSucursal($nroSucursal) {
        $this->validarNroSucursal($nroSucursal);
        $this->nro_sucursal=$nroSucursal;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
    private function validarNroSucursal($nroSucursal) {
        // Verificar si el n° de la sucursal está entre las sucursales ya definidas.
    } 
// --------------------------------------------------------------

}

?>