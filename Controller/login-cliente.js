$("#btn-login").click(main) 


function main() {
    let login = $("#loginInput").val();
    let contrasenia = $("#contraseña").val();

    let verificarDatos = validarDatos(login, contrasenia)
    if (verificarDatos.length === 0) {
        let data = {
            login: login,
            contrasenia: contrasenia
        }
        validarDatosLogin(data)
    } else {
        mostrarErrores(verificarDatos)
    }

    
}

function validarDatos(login, contrasenia){
    let formulariosIncorrectos = [];

    if (validarLogin(login)) {
        formulariosIncorrectos.push("login");
    }
    if (validarContrasenia(contrasenia)) {
        formulariosIncorrectos.push("contraseña");
    }

    return formulariosIncorrectos;
}
function validarLogin(login) {
    if (login.length > 100 || login.length < 2) {
        return true;
    } else {
        return false;
    }
}
function validarContrasenia(contrasenia) {
    if (contrasenia.length > 20 || contrasenia.length < 6 || !/^[a-zA-Z0-9]+$/.test(contrasenia)) {
        return true;
    } else {
        return false;
    }
}

function validarDatosLogin(data) {
    $.ajax({
        url: '../../../Model/validarDatosLogin.php',
        type: 'POST', 
        data: JSON.stringify(data), // Convierte el objeto a JSON
        contentType: 'application/json', // Indica que el contenido es JSON

        success: function(response) {
            if (response === 'ERROR') {
                alert("USUARIO O CONTRASEÑA INCORRECTOS");
                console.log("Error de autenticación");
            } else if (response === 0) {
                alert("Ingreso exitoso");
                window.location.href = "../../../index.php";
            } else if (response === 1) {
                alert("Ingreso exitoso EMPLEADO");
                window.location.href = "../../html/empleados/index-empleados.php";
            } else {
                console.log(response);
                mostrarErrores(response);
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