<?php

class estado_menu {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $nombre;
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre($nombre) {
        $this->validarNombre($nombre);
        $this->nombre=$nombre;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
private function validarNombre($precio) {
    // Solo puede ser uno de los que ya están definidos; solicitado, en stock, en producción, envasado, entregado, devuelto o desechado.
}
// --------------------------------------------------------------
}

?>