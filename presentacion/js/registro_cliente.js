import Cliente from './cliente.js';


// $(document).ready(function () {
//     const menuToggle = $('#menu-toggle');
//     const navUl = $('nav ul');

//     menuToggle.click(function () {
//         navUl.toggleClass('menu-opened');
//     });
// });


$("#btn-registro").click(main);

function main() {
    let nombre = $("#nombre").val();
    let apellido = $("#apellido").val();
    let email = $("#email").val();
    let contraseña = $("#contraseña").val();
    let telefono = Number($("#telefono").val());
    let cedula = Number($("#cedula").val());
    let calle = $("#calle").val();
    let nro_puerta = Number($("#num_puerta").val());
    let esquina = $("#esquina").val();
    let barrio = $("#barrio").val();
    let bloque = Number($("#bloque_apto").val());
    let apartamento = Number($("#apartamento").val());

    let nuevoCliente = new Cliente(nombre, apellido, email, contraseña, telefono, cedula, calle, nro_puerta, esquina, barrio, bloque, apartamento)
    // if (a) {
        
    // }
    let validarDatosPHP = validarDatosAJAX(nuevoCliente)

}

function validarDatos(nuevoCliente) {
    // VALIDAR DATOS EN JS PARA EVITAR CONSULTAS AL SERVIDOR INNECESARIAS
}


function validarDatosAJAX(nuevoCliente) {
    $.ajax({
        url: '../../../logica/validarDatos_ClienteWeb.php',
        type: 'POST', 
        data: JSON.stringify(nuevoCliente), // Convierte el objeto a JSON
        contentType: 'application/json', // Indica que el contenido es JSON

        success: function(response) {
            
            if (response.length != 0) {
                console.log(response);
                mostrarErrores(response);
            }
            if (response == 0) {
                console.log("Redireccionando");
                window.location.href = "../login-registro/login.html";
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
