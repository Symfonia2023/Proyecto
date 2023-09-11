import Cliente from './cliente.js';

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
    // let barrio = 'Barrio Sur';
    let bloque = Number($("#bloque_apto").val());
    let apartamento = Number($("#apartamento").val());

    let validarBoolean = validarCampos(nombre, apellido, email, contraseña, cedula, calle, esquina, telefono, nro_puerta, apartamento, bloque)
    if (!validarBoolean) {
        throw new Error(alert("Debe llenar todos los formularios"));
    } else {
        alert("ta bien")
    }
    alert("WTF")
    let nuevoCliente = new Cliente(nombre, apellido, email, contraseña, telefono, cedula, calle, nro_puerta, esquina, apartamento, bloque)

    let validarDatos = validarDatosAJAX(nuevoCliente)

}


function validarCampos(nombre, apellido, email, contraseña, cedula, calle, esquina, telefono, nro_puerta, apartamento, bloque) {
    if (
        nombre.trim() === "" ||
        apellido.trim() === "" ||
        email.trim() === "" ||
        contraseña.trim() === "" ||
        isNaN(cedula) ||
        calle.trim() === "" ||
        esquina.trim() === "" ||
        isNaN(telefono) ||
        isNaN(nro_puerta) ||
        isNaN(apartamento) ||
        isNaN(bloque) 
    ) {
        return false; // Al menos uno de los campos está vacío
    }
    return true; // Todos los campos tienen valores no vacíos
}




function validarDatosAJAX(nuevoCliente) {
    $.ajax({
        url: '../../../logica/validarDatos_ClienteWeb.php',
        type: 'POST', 
        data: JSON.stringify(nuevoCliente), // Convierte el objeto a JSON
        contentType: 'application/json', // Indica que el contenido es JSON

        success: function(response) {
            console.log(response);
        }, 
        error: function(error) {
            // Maneja los errores aquí
            console.log(error);
            
        }
    });
}

