function validarNombre(nombre) {
    nombre = nombre.trim(); // Eliminar espacios al principio y al final
    nombre = nombre.replace(/\s+/g, ' '); // Reemplazar múltiples espacios por uno solo
    if (nombre.length > 20 || !/^[a-zA-Z0-9\s]+$/.test(nombre)) {
        return true; // Nombre inválido
    } else {
        return false; // Nombre válido
    }
}

function validarApellido(apellido) {
    apellido = apellido.trim(); // Eliminar espacios al principio y al final
    apellido = apellido.replace(/\s+/g, ' '); // Reemplazar múltiples espacios por uno solo
    if (apellido.length > 20 || !/^[a-zA-Z0-9\s]+$/.test(apellido)) {
        return true;
    } else {
        return false;
    }
}

function validarEmail(email) {
    email = email.trim(); // Eliminar espacios al principio y al final
    email = email.replace(/\s+/g, ''); // Reemplazar múltiples espacios por uno solo
    if (email.length > 100 || !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
        return true; // Correo electrónico inválido
    } else {
        return false; // Correo electrónico válido
    }
}

function validarContrasenia(contrasenia) {
    if (contrasenia.length > 20 || contrasenia.length < 6 || !/^[a-zA-Z0-9]+$/.test(contrasenia)) {
        return true;
    } else {
        return false;
    }
}

function validarTelefono(telefono) {
    if (telefono.length > 9 || telefono.length < 8 || !/^[0-9]+$/.test(telefono)) {
        return true;
    } else {
        return false;
    }
}

function validarBarrio(barrio) {
    barrio = barrio.trim(); // Eliminar espacios al principio y al final
    barrio = barrio.replace(/\s+/g, ' '); // Reemplazar múltiples espacios por uno solo
    if (barrio.length > 50 || !/^[a-zA-Z0-9\s]+$/.test(barrio)) {
        return true;
    } else {
        return false;
    }
}

function validarCedula(cedula) {
    if (cedula.length !== 8 || !/^[0-9]+$/.test(cedula)) {
        return true;
    } else {
        return false;
    }
}

function validarCalle(calle) {
    calle = calle.trim(); // Eliminar espacios al principio y al final
    calle = calle.replace(/\s+/g, ' '); // Reemplazar múltiples espacios por uno solo
    if (calle.length > 100 || !/^[a-zA-Z0-9\s]+$/.test(calle)) {
        return true;
    } else {
        return false;
    }
}

function validarNroPuerta(nro_puerta) {
    if (nro_puerta.length > 5 || !/^[0-9]+$/.test(nro_puerta) || nro_puerta == 0) {
        return true;
    } else {
        return false;
    }
}

function validarEsquina(esquina) {
    esquina = esquina.trim(); // Eliminar espacios al principio y al final
    esquina = esquina.replace(/\s+/g, ' '); // Reemplazar múltiples espacios por uno solo
    if (esquina.length > 50 || !/^[a-zA-Z0-9.\s]+$/.test(esquina)) {
        return true;
    } else {
        return false;
    }
}

function validarApartamento(apartamento) {
    if (apartamento.length > 5 || !/^[0-9]+$/.test(apartamento) || apartamento == 0) {
        return true;
    } else {
        return false;
    }
}

function validarBloque(bloque) {
    if (bloque.length > 5 || !/^[0-9]+$/.test(bloque) || bloque == 0) {
        return true;
    } else {
        return false;
    }
}

function validarRUT(RUT) {
    if (RUT.length !== 12 || !/^[0-9]+$/.test(RUT) || RUT == 0) {
        return true;
    } else {
        return false;
    }
}

function validarNombreJuridico(nombre_juridico) {
    nombre_juridico = nombre_juridico.trim(); // Eliminar espacios al principio y al final
    nombre_juridico = nombre_juridico.replace(/\s+/g, ' '); // Reemplazar múltiples espacios por uno solo
    if (nombre_juridico.length > 30 || !/^[a-zA-Z0-9\s]+$/.test(nombre_juridico)) {
        return true;
    } else {
        return false;
    }
}

function validarLogin(login) {
    login = login.trim(); // Eliminar espacios al principio y al final
    login = login.replace(/\s+/g, ' '); // Reemplazar múltiples espacios por uno solo
    if (login.length > 30 || !/^[a-zA-Z0-9\s]+$/.test(login)) {
        return true;
    } else {
        return false;
    }
}
