<?php

class estado {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $nombre=["Solicitado","En stock","En produccion","Envasado","Entregado","Devuelto","Desechado"];
// --------------------------------------------------------------

// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNombre() {
        return $this->nombre;
    }
// --------------------------------------------------------------
}

?>