<?php


class cliente { // Al ser una clase PADRE no tiene constructor, sus hijos sí.
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $nroAutomatico=1; // Variable para asignar nro_cliente automáticamente.
    private $nro_cliente;
    private $telefono=[]; // Es un array ya que el atributo es multivaluado.
    private $email;
    private $direccion_completa=[
        "calle" => '',
        "nro_puerta" => '',
        "esquina" => '',
        "barrio" => '',
        "bloque" => '',
        "apartamento" => ''
    ];
    private $autorizacion;
// --------------------------------------------------------------


// /////////////////////////
// GETTERS Y SETTERS de los atributos.
// --------------------------------------------------------------
    public function getNroCliente() {
        return $this->nro_cliente;
    }
// --------------------------------------------------------------
    public function getTelefono() {
        return $this->telefono;
    }
    public function setTelefono($telefono) {
        $this->validarTelefono($telefono);
        $this->validarLongitudTelefono($telefono);
        $this->telefono = $telefono;
    }
// --------------------------------------------------------------
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->validarEmail($email);
        $this->validarLongitudEmail($email);
        $this->email = $email;
    }
// --------------------------------------------------------------
    public function getDireccionCompleta() {
        return $this->direccion_completa;
    }
    public function setDireccionCompleta($calle, $nro_puerta, $esquina, $barrio, $bloque, $apartamento) {
        $this->validarLongitudCalle($calle);
        $this->validarLongitudNroPuerta($nro_puerta);
        $this->validarLongitudEsquina($esquina);
        $this->validarLongitudBarrio($barrio);
        $this->validarLongitudBloque($bloque);
        $this->validarLongitudApartamento($apartamento);
        $this->direccion_completa['calle'] = $calle;
        $this->direccion_completa['nro_puerta'] = $nro_puerta;
        $this->direccion_completa['esquina'] = $esquina;
        $this->direccion_completa['barrio'] = $barrio;
        $this->direccion_completa['bloque'] = $bloque;
        $this->direccion_completa['apartamento'] = $apartamento;
    }
// --------------------------------------------------------------
    public function getAutorizacion() {
        return $this->autorizacion;
    }
    public function setAutorizacion($autorizacion) {
        $this->autorizacion = $autorizacion;
    }
// --------------------------------------------------------------


// /////////////////////////
// Funciones de la clase.
// --------------------------------------------------------------
    private function validarTelefono($telefono) {
        // El teléfono no puede contener letras ni caracteres extraños, solo números.
    } 
// --------------------------------------------------------------
    private function validarEmail($email) {
        // No puede estar conformado con otro formato que no sea gonzalo424@ejemplo.com.
    } 
// --------------------------------------------------------------
    private function validarLongitudTelefono($telefono) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($telefono); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 9) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudEmail($email) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($email); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 70) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudCalle($calle) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($calle); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudNroPuerta($nro_puerta) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($nro_puerta); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 5) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudEsquina($esquina) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($esquina); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudBarrio($barrio) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($barrio); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudBloque($bloque) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($bloque); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------
    private function validarLongitudApartamento($apartamento) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
        $cantCaracteres = strlen($apartamento); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return false;
        } else {
            return true;
        }
    } 
// --------------------------------------------------------------

}

?>