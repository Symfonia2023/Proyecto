function verComidas(idMenu) {
    // Lógica para mostrar las comidas del menú con la ID proporcionada
    alert("Ver comidas del menú con ID: " + idMenu);
}

function agregarAlCarrito(idMenu, nombreMenu, precioMenu) {

    let menu = {
        id: idMenu,
        nombre: nombreMenu,
        precio: precioMenu
    }

    $.ajax({
        url: '../../../Model/agregarMenuCarrito.php',
        type: 'POST', 
        data: JSON.stringify(menu), // Convierte el objeto a JSON
        contentType: 'application/json', // Indica que el contenido es JSON

        success: function(response) {
            if (response === "true") {
                $("#mensajeEmergente").fadeIn().delay(2000).fadeOut();
            } else {
                alert("Error al agregar el menú al carrito");
            }
        },        
        error: function(error) {
            console.log(error);
        }
    });

}