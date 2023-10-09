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
    let barrio = $("#barrio").val();
    let bloque = Number($("#bloque_apto").val());
    let apartamento = Number($("#apartamento").val());

    let validarBoolean = validarCampos(nombre, apellido, email, contraseña, telefono, cedula, calle, nro_puerta, esquina, barrio, bloque, apartamento)
    if (!validarBoolean) {
        alert("Debe llenar todos los formulariosasd");
    }

    let nuevoCliente = new Cliente(nombre, apellido, email, contraseña, telefono, cedula, calle, nro_puerta, esquina, apartamento, bloque)
    let validarDatos = validarDatosAJAX(nuevoCliente)

}

function validarCampos(nombre, apellido, email, contraseña, telefono, cedula, calle, nro_puerta, esquina, barrio, bloque, apartamento) {
    // Verificar si algún campo está vacío
    if (
        nombre === "" ||
        apellido === "" ||
        email === "" ||
        contraseña === "" ||
        isNaN(telefono) || telefono === 0 ||
        isNaN(cedula) || cedula === 0 ||
        calle === "" ||
        isNaN(nro_puerta) || nro_puerta === 0 ||
        esquina === "" ||
        barrio === "" ||
        isNaN(bloque) || bloque === 0 ||
        isNaN(apartamento) || apartamento === 0
    ) {
        // Devolver false si algún campo está vacío
        return false;
    } else {
        // Devolver true si todos los campos están llenos
        return true;
    }
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

