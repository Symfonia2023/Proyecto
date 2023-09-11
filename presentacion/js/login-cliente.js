$("#btn-login").click(main) 


function main() {
    let cedula = $("#cedula").val();
    let contraseña = $("#contraseña").val();

    let validarBoolean = validarCampos(cedula, contraseña)
    if (!validarBoolean) {
        throw new Error(alert("Debe llenar todos los formularios"));
    }
}


function validarCampos(cedula, contraseña) {
    if (
        cedula.trim() === '' ||
        contraseña.trim() === ''
    ) {
        return false;
    } else {
        return true;
    }
}