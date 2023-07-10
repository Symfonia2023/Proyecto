<?php

class estado_pedido {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $nombre=["Solicitado","Confirmado","Enviado","Entregado","Rechazado"];
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