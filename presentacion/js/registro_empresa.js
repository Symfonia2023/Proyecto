$("#btn-registro").click(main) 

function main() {
    let nombreEmpresa = $("#nombre").val();
    let RUT = $("#rut").val();
    let email = $("#email").val();
    let contraseña = $("#contraseña").val();
    let telefono = $("#telefono").val();
    let calle = $("#calle").val();
    let nro_puerta = $("#num-puerta").val();
    let esquina = $("#esquina").val();
    let apartamento = $("#apartamento").val();
    let bloque = $("#bloque-apto").val();

    
}

function validarDatosAJAX(nuevoCliente) {
    $.ajax({
        url: '../../../logica/validarDatos_ClienteEmpresa.php',
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
