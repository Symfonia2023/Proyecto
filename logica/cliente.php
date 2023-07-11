<?php


class cliente { // Al ser una clase PADRE no tiene constructor, sus hijos si.
// /////////////////////////
// ATRIBUTOS
// --------------------------------------------------------------
    private static $nroAutomatico=1; // Variable para asignar nro_cliente automaticamente.
    private $nro_cliente;
    private $telefono=[];
    private $email;
    private $direccion_completa=[
        "calle" => '',
        "nro_puerta" => '',
        "esquina" => '',
        "barrio" => ''
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
        $this->telefono = $telefono;
    }
// --------------------------------------------------------------
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
// --------------------------------------------------------------
    public function getDireccionCompleta() {
        return $this->direccion_completa;
    }
    public function setDireccionCompleta($calle, $nro_puerta, $esquina, $barrio) {
        $this->direccion_completa['calle'] = $calle;
        $this->direccion_completa['nro_puerta'] = $nro_puerta;
        $this->direccion_completa['esquina'] = $esquina;
        $this->direccion_completa['barrio'] = $barrio;
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
public function validarTelefono($telefono) {
    // El telefono no puede contener letras ni caracteres extraños, solo numeros.
} 
// --------------------------------------------------------------
public function validarEmail($email) {
    // No puede ser con otro formato que no sea @ejemplo.com
    // 
} 
// --------------------------------------------------------------
}

?>