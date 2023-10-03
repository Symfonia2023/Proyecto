<?php


function validarLongitudNombre($nombre) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $cantCaracteres = strlen($nombre); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres > 20) {
        return true;
    } else {
        return false;
    }
} 

function validarLongitudApellido($apellido) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $cantCaracteres = strlen($apellido); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres > 20) {
        return true;
    } else {
        return false;
    }
} 

function validarLongitudEmail($email) { 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else {
        return true;
    }
}

function validarLongitudContrasenia($contrasenia) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $cantCaracteres = strlen($contrasenia); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres > 20 || $cantCaracteres < 6) { // La contraseña no puede tener menos de 6 caracteres o mas de 20 caracteres.
        return true;
    } else {
        return false;
    }
} 

// Función de validación del número de teléfono.
function validarLongitudTelefono($telefono) {
    // Agregar lógica de validación del teléfono.
    // Por ejemplo, asegurarse de que solo contenga números y tenga una longitud válida.
    if (strlen($telefono) > 9 || strlen($telefono) < 8) {
        return false;
    } else {
        return true;
    }
}

function validarLongitudBarrio($barrio) {
    if (strlen($barrio) > 50) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudCedula($cedula) {
    $cantCaracteres = strlen($cedula); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres != 8) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudCalle($calle) {
    if (strlen($calle) > 100) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudNroPuerta($nro_puerta) {
    if (strlen($nro_puerta) > 5) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudEsquina($esquina) {
    if (strlen($esquina) > 50) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudApartamento($apartamento) {
    if (strlen($apartamento) > 5) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudBloque($bloque) {
    if (strlen($bloque) > 5) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudRUT($RUT) {
    $cantCaracteres = strlen($RUT); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres != 12) {
        return true;
    } else {
        return false;
    }
}

function validarLongitudNombreJuridico($nombre_juridico) {
    $cantCaracteres = strlen($nombre_juridico); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
        if ($cantCaracteres > 30) {
            return true;
        } else {
            return false;
        }
}

function validarLongitudLogin($login) { // Función para validar la longitud del atributo y no generar errores en la base de datos.
    $cantCaracteres = strlen($login); // Strlen es una función que devuelve la cantidad de caracteres de un texto.
    if ($cantCaracteres > 30) {
        return true;
    } else {
        return false;
    }
} 

?>