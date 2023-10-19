<?php

class Cliente {
    // ATRIBUTOS
    private $telefono; // Número(s) de teléfono.
    private $email; // Dirección de correo electrónico.
    private $direccion_completa = [
        "calle" => '',
        "nro_puerta" => '',
        "esquina" => '',
        "barrio" => '',
        "bloque" => '',
        "apartamento" => ''
    ]; // Dirección completa del cliente.
    private $autorizacion; // Autorización del cliente, por default es 0 = no.
    private $contrasena;

    // CONSTRUCTOR
    // El constructor de la clase Cliente se encarga de inicializar los atributos del cliente, incluyendo su número de cliente, datos de contacto y dirección.
    public function __construct($telefono, $email, $direccion_completa, $contrasena) {

        // Establecer datos de contacto y dirección.
        $this->setTelefono($telefono); // Validar y establecer el teléfono.
        $this->setEmail($email); // Validar y establecer el email.
        $this->setDireccionCompleta($direccion_completa['calle'], $direccion_completa['nro_puerta'], $direccion_completa['esquina'], $direccion_completa['barrio'], $direccion_completa['bloque'], $direccion_completa['apartamento']); // Validar y establecer la dirección.
        $this->setAutorizacion(); // Establecer la autorización inicial.
        $this->setContraseña($contrasena);
    }

    // GETTERS Y SETTERS para los atributos.
    
    // Método GET para obtener el número(s) de teléfono.
    public function getTelefono() {
        return $this->telefono;
    }

    // Método SET para establecer el número(s) de teléfono.
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    // Método GET para obtener la dirección de correo electrónico.
    public function getEmail() {
        return $this->email;
    }

    // Método SET para establecer la dirección de correo electrónico.
    public function setEmail($email) {
        $this->email = $email;
    }

    // Método GET para obtener la dirección completa.
    public function getDireccionCompleta() {
        return $this->direccion_completa;
    }

    // Método SET para establecer la dirección completa.
    public function setDireccionCompleta($calle, $nro_puerta, $esquina, $barrio, $bloque, $apartamento) {
        // Establecer la dirección completa.
        $this->direccion_completa['calle'] = $calle;
        $this->direccion_completa['nro_puerta'] = $nro_puerta;
        $this->direccion_completa['esquina'] = $esquina;
        $this->direccion_completa['barrio'] = 'Barrio Sur';
        $this->direccion_completa['bloque'] = $bloque;
        $this->direccion_completa['apartamento'] = $apartamento;
    }

    // Método GET para obtener la autorización.
    public function getAutorizacion() {
        return $this->autorizacion;
    }

    // Método SET para establecer la autorización.
    public function setAutorizacion() {
        $this->autorizacion = 0;
    }

    
    public function getContraseña() {
        return $this->contrasena;
    }
    public function setContraseña($contrasena) {
        $this->contrasena = $contrasena;
    }
}


?>