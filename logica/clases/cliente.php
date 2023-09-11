<?php

class Cliente {
    // ATRIBUTOS
    private static $nroAutomatico = 1; // Contador automático para nro_cliente.
    private $nro_cliente; // Número de cliente.
    private $telefono = []; // Número(s) de teléfono.
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

    // CONSTRUCTOR
    // El constructor de la clase Cliente se encarga de inicializar los atributos del cliente, incluyendo su número de cliente, datos de contacto y dirección.
    public function __construct($telefono, $email, $direccion_completa) {
        // Inicializar el número de cliente automáticamente.
        $this->nro_cliente = self::$nroAutomatico;
        self::$nroAutomatico++;

        try {
            // Establecer datos de contacto y dirección.
            $this->setTelefono($telefono); // Validar y establecer el teléfono.
            $this->setEmail($email); // Validar y establecer el email.
            $this->setDireccionCompleta($direccion_completa['calle'], $direccion_completa['nro_puerta'], $direccion_completa['esquina'], $direccion_completa['barrio'], $direccion_completa['bloque'], $direccion_completa['apartamento']); // Validar y establecer la dirección.
            $this->setAutorizacion(); // Establecer la autorización inicial.
        } catch (Exception $e) {
            throw $e;
        }
    }

    // GETTERS Y SETTERS para los atributos.
    
    // Método GET para obtener el número de cliente.
    public function getNroCliente() {
        return $this->nro_cliente;
    }

    // Método GET para obtener el número(s) de teléfono.
    public function getTelefono() {
        return $this->telefono;
    }

    // Método SET para establecer el número(s) de teléfono.
    public function setTelefono($telefono) {
        if (!$this->validarTelefono($telefono)) {
            throw new Exception("Teléfono inválido");
        }
        $this->telefono = $telefono;
    }

    // Método GET para obtener la dirección de correo electrónico.
    public function getEmail() {
        return $this->email;
    }

    // Método SET para establecer la dirección de correo electrónico.
    public function setEmail($email) {
        if (!$this->validarEmail($email)) {
            throw new Exception("Email inválido");
        }
        $this->email = $email;
    }

    // Método GET para obtener la dirección completa.
    public function getDireccionCompleta() {
        return $this->direccion_completa;
    }

    // Método SET para establecer la dirección completa.
    public function setDireccionCompleta($calle, $nro_puerta, $esquina, $barrio, $bloque, $apartamento) {
        // Agregar validaciones de longitud para cada campo de la dirección.
        $this->validarLongitudCalle($calle); // Validar la longitud de la calle.
        $this->validarLongitudNroPuerta($nro_puerta); // Validar la longitud del número de puerta.
        $this->validarLongitudEsquina($esquina); // Validar la longitud de la esquina.
        $this->validarLongitudBarrio($barrio); // Validar la longitud del barrio.
        $this->validarLongitudBloque($bloque); // Validar la longitud del bloque.
        $this->validarLongitudApartamento($apartamento); // Validar la longitud del apartamento.

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

    // FUNCIONES DE VALIDACIÓN
    
    // Función de validación del número de teléfono.
    private function validarTelefono($telefono) {
        // Agregar lógica de validación del teléfono.
        // Por ejemplo, asegurarse de que solo contenga números y tenga una longitud válida.
        if (strlen($telefono) > 9 || strlen($telefono) < 8) {
            return false;
        } else {
            return true;
        }
    }

    // Función de validación de la dirección de correo electrónico.
    private function validarEmail($email) {
        // Agregar lógica de validación del email.
        // Por ejemplo, validar el formato de email.
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    // Funciones de validación de la longitud de campos de dirección.
    
    private function validarLongitudCalle($calle) {
        if (strlen($calle) > 100) {
            throw new Exception("Longitud de calle inválida");
        }
    }

    private function validarLongitudNroPuerta($nro_puerta) {
        if (strlen($nro_puerta) > 5) {
            throw new Exception("Longitud de número de puerta inválida");
        }
    }

    private function validarLongitudEsquina($esquina) {
        if (strlen($esquina) > 50) {
            throw new Exception("Longitud de esquina inválida");
        }
    }

    private function validarLongitudBarrio($barrio) {
        if (strlen($barrio) > 50) {
            throw new Exception("Longitud de barrio inválida");
        }
    }

    private function validarLongitudBloque($bloque) {
        if (strlen($bloque) > 5) {
            throw new Exception("Longitud de bloque inválida");
        }
    }

    private function validarLongitudApartamento($apartamento) {
        if (strlen($apartamento) > 5) {
            throw new Exception("Longitud de apartamento inválida");
        }
    }
}


?>