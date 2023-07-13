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
        $this->telefono = $telefono;
    }
// --------------------------------------------------------------
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->validarEmail($email);
        $this->email = $email;
    }
// --------------------------------------------------------------
    public function getDireccionCompleta() {
        return $this->direccion_completa;
    }
    public function setDireccionCompleta($calle, $nro_puerta, $esquina, $barrio, $bloque, $apartamento) {
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
    // No puede estar conformado con otro formato que no sea @ejemplo.com.
} 
// --------------------------------------------------------------
}

?>