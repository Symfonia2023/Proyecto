$("#btn-login").click(main) 


function main() {
    let rut = $("#rut").val();
    let contraseña = $("#contraseña").val();

    let validarBoolean = validarCampos(rut, contraseña)
    if (!validarBoolean) {
        throw new Error(alert("Debe llenar todos los formularios"));
    }
}


function validarCampos(RUT, contraseña) {
    if (
        rut === null ||
        contraseña.trim() === ''
    ) {
        return false;
    } else {
        return true;
    }
}