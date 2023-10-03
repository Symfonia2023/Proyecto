<?php

include 'usuario.php'; // Se le incluye la clase usuario ya que cada vez que se crea un cliente nuevo se guardan sus datos para la posterior comprobación de login (se implementará en próximas versiones).
include 'cliente.php';

class clienteWeb extends cliente { // Clase que hereda atributos.
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private $CI;
    private $nombre_completo=[
        "nombre" => '',
        "apellido" => ''
    ];
// --------------------------------------------------------------


// /////////////////////////
// CONSTRUCTOR
// --------------------------------------------------------------
    public function __construct($telefono,$email,$direccion_completa,$CI,$nombre_completo) {
            $clienteWeb = new cliente($telefono, $email, $direccion_completa);

            $this->setTelefono($telefono);
            $this->setEmail($email);
            $this->setDireccionCompleta($direccion_completa['calle'], $direccion_completa['nro_puerta'], $direccion_completa['esquina'], $direccion_completa['barrio'], $direccion_completa['bloque'], $direccion_completa['apartamento']);
            $this->setAutorizacion();
            $this->setCI($CI);
            $this->setNombreCompleto($nombre_completo['nombre'], $nombre_completo['apellido']);
    }
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getCI() {
        return $this->CI;
    }
    public function setCI($CI) {
        $this->CI = $CI;
    }
// --------------------------------------------------------------
    public function getNombreCompleto() {
        return $this->nombre_completo;
    }
    public function setNombreCompleto($nombre, $apellido) {
        $this->nombre_completo['nombre'] = $nombre;
        $this->nombre_completo['apellido'] = $apellido;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------

}

?>