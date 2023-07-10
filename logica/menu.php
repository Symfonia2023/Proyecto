<?php

// El comando "self::" es para acceder a elementos estaticos de la clase.

class menu {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $idAutomatico=1; // Variable para asignar ID's automaticamente.
    private $id_menu;  // Hacer una funcion que lo asigne la ID automaticamente.
    private $nombre_menu;
    private $precio;
    private $tipo_menu;
    private $stock_minimo;
    private $stock_maximo;
// --------------------------------------------------------------

// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct($nombre_menu,$precio,$tipo_menu,$stock_minimo,$stock_maximo) { // No se le agrega el atributo de la clase "id_menu" como parametro porque se lo asignará automaticamente.

    $this->id_menu = self::$idAutomatico; // Asignar la ID automaticamente.
    self::$idAutomatico++; // Incrementar el contador de ID's.

    $this->nombre_menu = $nombre_menu;
    $this->precio = $precio;
    $this->tipo_menu = $tipo_menu;
    $this->stock_minimo = $stock_minimo;
    $this->stock_maximo = $stock_maximo;
    }
// --------------------------------------------------------------

// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getIdMenu() {
        return $this->id_menu;
    }
// --------------------------------------------------------------
    public function getNombreMenu() {
        return $this->nombre_menu;
    }
    public function setNombreMenu($nombre_menu) {
        $this->nombre_menu = $nombre_menu;
    }
// --------------------------------------------------------------
    public function getPrecio() {
        return $this->precio;
    }
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
// --------------------------------------------------------------
    public function getTipoMenu() {
        return $this->tipo_menu;
    }
    public function setTipoMenu($tipo_menu) {
        $this->tipo_menu = $tipo_menu;
    }
// --------------------------------------------------------------
    public function getStockMinimo() {
        return $this->stock_minimo;
    }
    public function setStockMinimo($stock_minimo) {
        $this->stock_minimo = $stock_minimo;
    }
// --------------------------------------------------------------
    public function getStockMaximo() {
        return $this->stock_maximo;
    }
    public function setStockMaximo($stock_maximo) {
        $this->stock_maximo = $stock_maximo;
    }
// --------------------------------------------------------------

// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
public function validarPrecio($precio) {
    // No puede ser 0 ni menor a.
}
// --------------------------------------------------------------
public function validarTipoMenu($tipo_menu) {
    // Solo puede ser uno de los que ya estan definidos.
}
// --------------------------------------------------------------
public function validarStockMinimo($stock_minimo) {
    // No puede ser 0 ni menor a.
    // No puede ser mayor al stock maximo.
}
// --------------------------------------------------------------
public function validarStockMaximo($stock_maximo) {
    // No puede ser 0 ni menor a.
    // No puede ser menor al stock minimo.
}
// --------------------------------------------------------------


}



?>