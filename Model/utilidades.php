<?php

function validarNombre($nombre) {
    $nombre = trim($nombre); // Eliminar espacios al principio y al final
    $nombre = preg_replace('/\s+/', ' ', $nombre); // Reemplazar múltiples espacios por uno solo
    if (strlen($nombre) > 20 || !preg_match('/^[a-zA-Z0-9\s]+$/', $nombre)) { // Verificar longitud y que solo contenga letras, números y no dos o más espacios juntos
        return true; // Nombre inválido
    } else {
        return false; // Nombre válido
    } 
} // Este patron se repetira en las proximas funciones.

function validarApellido($apellido) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $apellido = trim($apellido); // Eliminar espacios al principio y al final
    $apellido = preg_replace('/\s+/', ' ', $apellido); // Reemplazar múltiples espacios por uno solo
    if (strlen($apellido) > 20 || !preg_match('/^[a-zA-Z0-9\s]+$/', $apellido)) {
        return true;
    } else {
        return false;
    }
} 

function validarEmail($email) { 
    $email = trim($email); // Eliminar espacios al principio y al final
    $email = preg_replace('/\s+/', '', $email); // Reemplazar múltiples espacios por uno solo
    if (strlen($email) > 100 || !preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
        return true; // Correo electrónico inválido
    } else {
        return false; // Correo electrónico válido
    }
}

function validarContrasenia($contrasenia) {
    if (strlen($contrasenia) > 20 || strlen($contrasenia) < 6 || !preg_match('/^[a-zA-Z0-9]+$/', $contrasenia)) { // La contraseña no puede tener menos de 6 caracteres o mas de 20 caracteres y solo puede contener numeros y letras.
        return true;
    } else {
        return false;
    }
} 

function validarTelefono($telefono) {
    if (strlen($telefono) > 9 || strlen($telefono) < 8 || !preg_match('/^[0-9]+$/', $telefono)) {
        return true;
    } else {
        return false;
    }
}

function validarBarrio($barrio) {
    $barrio = trim($barrio); // Eliminar espacios al principio y al final
    $barrio = preg_replace('/\s+/', ' ', $barrio); // Reemplazar múltiples espacios por uno solo
    if (strlen($barrio) > 50 || !preg_match('/^[a-zA-Z0-9\s]+$/', $barrio)) {
        return true;
    } else {
        return false;
    } 
}


function validarCedula($cedula) {
    if (strlen($cedula) != 8 || !preg_match('/^[0-9]+$/', $cedula)) {
        return true;
    } else {
        return false;
    }
}
function validarCalle($calle) {
    $calle = trim($calle); // Eliminar espacios al principio y al final
    $calle = preg_replace('/\s+/', ' ', $calle); // Reemplazar múltiples espacios por uno solo
    if (strlen($calle) > 100 || !preg_match('/^[a-zA-Z0-9\s]+$/', $calle)) {
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
    $esquina = trim($esquina); // Eliminar espacios al principio y al final
    $esquina = preg_replace('/\s+/', ' ', $esquina); // Reemplazar múltiples espacios por uno solo
    if (strlen($esquina) > 50 || !preg_match('/^[a-zA-Z0-9.\s]+$/', $esquina)) {
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
    if (strlen($RUT) != 12 || !preg_match('/^[0-9]+$/', $RUT) || $RUT == 0) {
        return true;
    } else {
        return false;
    }
}

function validarNombreJuridico($nombre_juridico) {
    $nombre_juridico = trim($nombre_juridico); // Eliminar espacios al principio y al final
    $nombre_juridico = preg_replace('/\s+/', ' ', $nombre_juridico); // Reemplazar múltiples espacios por uno solo
        if (strlen($nombre_juridico) > 30 || !preg_match('/^[a-zA-Z0-9\s]+$/', $nombre_juridico)) {
            return true;
        } else {
            return false;
        }
}

function validarLogin($login) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $login = trim($login); // Eliminar espacios al principio y al final
    $login = preg_replace('/\s+/', ' ', $login); // Reemplazar múltiples espacios por uno solo
    if (strlen($login) > 100 || strlen($login) < 2) {
        return true;
    } else {
        return false;
    }
} 

?>