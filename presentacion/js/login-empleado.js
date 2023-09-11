$("#btn-login").click(main) 


function main() {
    let cedula = $("#cedula").val();
    let id = $("#codigo-id").val();

    let validarBoolean = validarCampos(cedula, id)
    if (!validarBoolean) {
        throw new Error(alert("Debe llenar todos los formularios"));
    }
}


function validarCampos(cedula, id) {
    if (
        cedula.trim() === '' ||
        id.trim() === ''
    ) {
        return false;
    } else {
        return true;
    }
}