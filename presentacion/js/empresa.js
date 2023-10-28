
export default class Cliente{
    constructor(nombreEmpresa, RUT, email, contraseña, telefono, calle, nro_puerta, barrio, esquina, apartamento, bloque) {
        this.nombreEmpresa = nombreEmpresa;
        this.RUT = RUT;
        this.email = email;
        this.contraseña = contraseña;
        this.telefono = telefono;
        this.calle = calle;
        this.nro_puerta = nro_puerta;
        this.barrio = barrio;
        this.esquina = esquina;
        this.apartamento = apartamento;
        this.bloque = bloque;
    }
}