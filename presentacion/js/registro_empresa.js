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

    let validarBoolean = validarCampos(nombreEmpresa, RUT, email, contraseña, telefono, calle, nro_puerta, esquina, apartamento, bloque)
    if (!validarBoolean) {
        throw new Error(alert("Debe llenar todos los formularios"));
    }
}

function validarCampos(nombreEmpresa, RUT, email, contraseña, telefono, calle, nro_puerta, esquina, apartamento, bloque) {
    if (
        nombreEmpresa.trim() === '' ||
        RUT === null ||
        email.trim() === '' ||
        contraseña.trim() === '' ||
        telefono === null ||
        cedula === null ||
        calle.trim() === '' ||
        nro_puerta === null ||
        esquina.trim() === '' ||
        apartamento === null ||
        bloque === null
    ) {
        return false;
    } else {
        return true;
    }
}