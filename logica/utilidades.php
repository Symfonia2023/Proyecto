<?php

function validarNombre($nombre) {
    $nombre = trim($nombre); // Eliminar espacios al principio y al final
    $nombre = preg_replace('/\s+/', ' ', $nombre); // Reemplazar múltiples espacios por uno solo
    if (strlen($nombre) > 20 || !preg_match('/^[a-zA-Z0-9\s]+$/', $nombre)) { // Verificar longitud y que solo contenga letras y números
        return true; // Nombre inválido
    } else {
        return false; // Nombre válido
    } 
} // Este patron se repetira en las proximas funciones.

function validarApellido($apellido) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $cantCaracteres = strlen($apellido); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres > 20 || !preg_match('/^[a-zA-Z0-9]+$/', $apellido)) {
        return true;
    } else {
        return false;
    }
} 

function validarEmail($email) { 
    $cantCaracteres = strlen($email);

    // Verificar si la longitud es mayor a 100 o si no coincide con el patrón de correo electrónico
    if ($cantCaracteres > 100 || !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        return true; // Correo electrónico inválido
    } else {
        return false; // Correo electrónico válido
    }
}

function validarContrasenia($contrasenia) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $cantCaracteres = strlen($contrasenia);
    if ($cantCaracteres > 20 || $cantCaracteres < 6 || !preg_match('/^[a-zA-Z0-9]+$/', $contrasenia)) { // La contraseña no puede tener menos de 6 caracteres o mas de 20 caracteres y solo puede contener numeros y letras.
        return true;
    } else {
        return false;
    }
} 

function validarTelefono($telefono) {
    // Agregar lógica de validación del teléfono.
    // Por ejemplo, asegurarse de que solo contenga números y tenga una longitud válida.
    if (strlen($telefono) > 9 || strlen($telefono) < 8 || !preg_match('/^[0-9]+$/', $telefono)) {
        return true;
    } else {
        return false;
    }
}

function validarBarrio($barrio) {
    $cantCaracteres = strlen($barrio);
    if ($cantCaracteres > 50 || !preg_match('/^[a-zA-Z0-9\s]+$/', $barrio)) {
        return true;
    } else {
        return false;
    } 
}




function validarCedula($cedula) {
    $cantCaracteres = strlen($cedula); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres != 8 || !preg_match('/^[0-9]+$/', $cedula)) {
        return true;
    } else {
        return false;
    }
}

function validarCalle($calle) {
    if (strlen($calle) > 100 || !preg_match('/^[a-zA-Z0-9]+$/', $calle)) {
        return true;
    } else {
        return false;
    }
}

function validarNroPuerta($nro_puerta) {
    if (strlen($nro_puerta) > 5 || !preg_match('/^[0-9]+$/', $nro_puerta) || $nro_puerta == 0) {
        return true;
    } else {
        return false;
    }
}

function validarEsquina($esquina) {
    if (strlen($esquina) > 50 || !preg_match('/^[a-zA-Z0-9]+$/', $esquina)) {
        return true;
    } else {
        return false;
    }
}

function validarApartamento($apartamento) {
    if (strlen($apartamento) > 5 || !preg_match('/^[0-9]+$/', $apartamento) || $apartamento == 0) {
        return true;
    } else {
        return false;
    }
}

function validarBloque($bloque) {
    if (strlen($bloque) > 5 || !preg_match('/^[0-9]+$/', $bloque) || $bloque == 0) {
        return true;
    } else {
        return false;
    }
}

function validarRUT($RUT) {
    $cantCaracteres = strlen($RUT); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres != 12 || !preg_match('/^[0-9]+$/', $RUT) || $RUT == 0) {
        return true;
    } else {
        return false;
    }
}

function validarNombreJuridico($nombre_juridico) {
    $cantCaracteres = strlen($nombre_juridico); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30 || !preg_match('/^[a-zA-Z0-9]+$/', $nombre_juridico)) {
            return true;
        } else {
            return false;
        }
}

function validarLogin($login) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $cantCaracteres = strlen($login); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres > 30 || !preg_match('/^[a-zA-Z0-9]+$/', $login)) {
        return true;
    } else {
        return false;
    }
} 

?>