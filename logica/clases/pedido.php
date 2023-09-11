<?php

// El comando "self::" es para acceder a elementos estáticos de la clase.

class pedido { 
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $nro_pedidoAutomatico=1; // Variable para asignar el número de pedido automáticamente.
    private $nro_pedido;
    private $metodo_pago; // Se utilizará la API de MercadoPago.
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct($metodo_pago) { // No se le agrega el atributo de la clase "nro_pedido" como parámetro porque se lo asignará automáticamente.
        $this->nro_pedido = self::$nro_pedidoAutomatico; 
        self::$nro_pedidoAutomatico++;

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
    public function getMetodoPago() {
        return $this->metodo_pago;
    }
    public function setMetodoPago($metodo_pago) {
        $this->metodo_pago=$metodo_pago;
    }
// --------------------------------------------------------------

}

?>