<?php

// El comando "self::" es para acceder a elementos estaticos de la clase.

class pedido {
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $nro_pedidoAutomatico=1; // Variable para asignar el numero de pedido automaticamente.
    private $nro_pedido;
    private $fecha;
    private $metodo_pago;
// --------------------------------------------------------------

// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct($fecha,$metodo_pago) { // No se le agrega el atributo de la clase "nro_pedido" como parametro porque se lo asignará automaticamente.
        $this->nro_pedido = self::$nro_pedidoAutomatico;
        self::$nro_pedidoAutomatico++;

        $this->fecha = $fecha;
        $this->metodo_pago = $metodo_pago;
    }
// --------------------------------------------------------------

// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNroPedido() {
        return $this->nro_pedido;
    }
// --------------------------------------------------------------
    public function getFecha() {
        return $this->fecha;
    }
    public function setFecha($fecha){
        $this->fecha=$fecha;
    }
// --------------------------------------------------------------
    public function getMetodoPago() {
        return $this->metodo_pago;
    }
    public function setMetodoPago($metodo_pago) {
        $this->metodo_pago=$metodo_pago;
    }
// --------------------------------------------------------------

// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
    public function validarFecha($fecha) {

    }
// --------------------------------------------------------------
}






?>