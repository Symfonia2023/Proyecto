function verComidas(idMenu) {
    
    $.ajax({
        url: '../../../Model/mostrarComidas.php',
        type: 'POST', 
        data: JSON.stringify({ idMenu: idMenu }), // Convierte el objeto a JSON
        contentType: 'application/json', // Indica que el contenido es JSON

        success: function(response) {
           var comidas = JSON.parse(response);

           // Limpia el contenido actual de la sección comidas
           $(".comidas").empty();

           for (let i = 0; i < comidas.length; i++) {
            // Crea un elemento span para la flecha y el texto, esto se hace para que no queden las dos cosas en la misma linea y con el mismo color
            var comidaElement = $("<span>")
                .append($("<span>").text("→ ").css("color", "lightgreen"))
                .append(comidas[i] + "<br>");

            // Agrega el elemento span a la sección comidas
            $(".comidas").append(comidaElement);
            }

            $("#verComidasVentana").fadeIn();
        },        
        error: function(error) {
            console.log(error);
        }
    });
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