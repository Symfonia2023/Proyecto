
export default class Cliente{
 
    constructor(nombre, apellido, email, contraseña, telefono, cedula, calle, nro_puerta, esquina, apartamento, bloque) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.email = email;
        this.contraseña = contraseña;
        this.telefono = telefono;
        this.cedula = cedula;
        this.calle = calle,
        this.nro_puerta = nro_puerta;
        this.esquina = esquina;
        this.barrio = 'Barrio Sur';
        this.bloque = bloque;
        this.apartamento = apartamento;

    }
}