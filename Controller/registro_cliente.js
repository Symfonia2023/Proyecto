import Cliente from './cliente.js';


$("#btn-registro").click(main);

function main() {
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let email = $("#email").val();
    let contraseña = $("#contraseña").val();
    let telefono = $("#telefono").val();
    let cedula = $("#cedula").val();
    let calle = $("#calle").val();
    let nro_puerta = $("#num_puerta").val();
    let esquina = $("#esquina").val();
    let barrio = $("#barrio").val();
    let bloque = $("#bloque_apto").val();
    let apartamento = $("#apartamento").val();

    let nuevoCliente = new Cliente(nombre, apellido, email, contraseña, telefono, cedula, calle, nro_puerta, esquina, barrio, bloque, apartamento)
    
    let validarDatosJS = validarDatos(nuevoCliente)

    if (validarDatosJS.length === 0) {
        validarDatosAJAX(nuevoCliente);
    } else {
        mostrarErrores(validarDatosJS);
    }
    
}


function validarDatos(nuevoCliente) {
    let formulariosIncorrectos = [];

    if (validarNombre(nuevoCliente.nombre)) {
        formulariosIncorrectos.push("nombre");
    }
    if (validarApellido(nuevoCliente.apellido)) {
        formulariosIncorrectos.push("apellido");
    }
    if (validarEmail(nuevoCliente.email)) {
        formulariosIncorrectos.push("email");
    }
    if (validarContrasenia(nuevoCliente.contraseña)) {
        formulariosIncorrectos.push("contraseña");
    }
    if (validarTelefono(nuevoCliente.telefono)) {
        formulariosIncorrectos.push("telefono");
    }
    if (validarCedula(nuevoCliente.cedula)) {
        formulariosIncorrectos.push("cedula");
    }
    if (validarCalle(nuevoCliente.calle)) {
        formulariosIncorrectos.push("calle");
    }
    if (validarNroPuerta(nuevoCliente.nro_puerta)) {
        formulariosIncorrectos.push("nroPuerta");
    }
    if (validarBarrio(nuevoCliente.barrio)) {
        formulariosIncorrectos.push("barrio");
    }
    if (validarEsquina(nuevoCliente.esquina)) {
        formulariosIncorrectos.push("esquina");
    }
    if (validarApartamento(nuevoCliente.apartamento)) {
        formulariosIncorrectos.push("apartamento");
    }
    if (validarBloque(nuevoCliente.bloque)) {
        formulariosIncorrectos.push("bloque");
    }

    return formulariosIncorrectos;
}


function validarDatosAJAX(nuevoCliente) {
    $.ajax({
        url: '../../../Model/validarDatos_ClienteWeb.php',
        type: 'POST', 
        data: JSON.stringify(nuevoCliente), // Convierte el objeto a JSON
        contentType: 'application/json', // Indica que el contenido es JSON

        success: function(response) {
            
            if (response.length != 0) {
                console.log(response);
                mostrarErrores(response);
            }
            if (response == 0) {
                alert("Redireccionando");
                window.location.href = "../../../View/html/login-registro/login.html";
            }
        }, 
        error: function(error) {
            console.log(error);
        }
    });
}


function mostrarErrores(errores) {
    restablecerColores()
    for (let i = 0; i < errores.length; i++) {
        // console.log(errores[i]);
        let campo = `label[for="${errores[i]}"]`;
        $(`${campo} svg`).attr('fill', '#FF0000');
        $(campo).addClass('label-con-error');
        $(`${campo} input, ${campo} svg`).addClass('shake-animation');
        setTimeout(restablecerAnimacionError, 500); // Se restablece para que se pueda volver a mostrar al presionar el boton y que todavia este el error.
    }
    
    function restablecerAnimacionError() {
        $('label input, label svg').removeClass('shake-animation');
    }
}

function restablecerColores() {
    $('label svg').attr('fill', '#6FB85E');
    $('label').removeClass('label-con-error');
    $(`label`).removeClass('shake-animation');
}


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

