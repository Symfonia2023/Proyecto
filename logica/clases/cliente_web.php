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

        try {
            $clienteWeb = new cliente($telefono, $email, $direccion_completa);

            $this->nro_cliente = $clienteWeb->getNroCliente();
            $this->setTelefono($telefono);
            $this->setEmail($email);
            $this->setDireccionCompleta($direccion_completa['calle'], $direccion_completa['nro_puerta'], $direccion_completa['esquina'], $direccion_completa['barrio'], $direccion_completa['bloque'], $direccion_completa['apartamento']);
            $this->setAutorizacion();
            $this->setCI($CI);
            $this->setNombreCompleto($nombre_completo['nombre'], $nombre_completo['apellido']);
        } catch (Exception $e) {
            throw $e;
        }
    }
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getCI() {
        return $this->CI;
    }
    public function setCI($CI) {
        if (!$this->validarCI($CI)) {
            throw new Exception("CI invalido.");
        }
        $this->CI = $CI;
    }
// --------------------------------------------------------------
    public function getNombreCompleto() {
        return $this->nombre_completo;
    }
    public function setNombreCompleto($nombre, $apellido) {
        if (!$this->validarLongitudNombre($nombre)) {
            throw new Exception("Nombre invalido");
        }
        if (!$this->validarLongitudApellido($apellido)) {
            throw new Exception("Apellido invalido");
        }

        $this->nombre_completo['nombre'] = $nombre;
        $this->nombre_completo['apellido'] = $apellido;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
    private function validarCI($CI) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($CI); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres != 8) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudNombre($nombre) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($nombre); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 20) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudApellido($apellido) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($apellido); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 20) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------

}

?>