$(document).ready(function () {
    // Array para almacenar IDs de pedidos confirmados
    var pedidosConfirmados = [];

    // Realiza la solicitud AJAX para obtener los pedidos
    $.ajax({
        url: '../../../Model/obtenerPedidos.php',
        type: 'POST',
        dataType: 'json', // Indica que la respuesta es JSON
        success: function(response) {
            console.log(response);
            // Manejar la respuesta del servidor
            if (response && response.length > 0) {
                for (var i = 0; i < response.length; i++) {
                    var pedido = response[i];

                    // Verificar si el pedido está confirmado y si ya se mostró
                    if (pedido.estado === 'confirmado' && pedidosConfirmados.indexOf(pedido.idPedido) === -1) {
                        // Crear una nueva sección para cada pedido
                        var nuevaSeccionPedido = $('<section>').addClass('pedidos');

                        // Agregar subsecciones para cada detalle del pedido
                        nuevaSeccionPedido.append($('<section>').addClass('pedido-id').text(pedido.idPedido));
                        nuevaSeccionPedido.append($('<section>').addClass('pedido-nombre').text(pedido.nombreMenu));

                        // Crear un cuadro de comidas con casillas
                        var cuadroComidas = $('<div>').addClass('pedido-comidas');
                        for (var j = 0; j < pedido.comidas.length; j++) {
                            var casillaComida = $('<span>').text(' {X} ' + pedido.comidas[j]);
                            cuadroComidas.append(casillaComida);
                        }
                        nuevaSeccionPedido.append(cuadroComidas);

                        nuevaSeccionPedido.append($('<section>').addClass('pedido-estado').text(pedido.estado));
                        nuevaSeccionPedido.append($('<section>').addClass('pedido-precio').text('$' + pedido.precio));

                        // Contenedor para los botones
                        var contenedorBotones = $('<section>').addClass('pedido-botones');

                        // Agregar el botón de avanzar estado solo si el estado es diferente de 'entregado'
                        if (pedido.estado !== 'entregado') {
                            contenedorBotones.append('<button class="btnAvanzarEstado" onclick="avanzarEstado(' + pedido.idPedido + ', \'' + pedido.estado + '\')">Avanzar estado</button>');
                        }

                        // Agregar el botón de rechazar pedido solo si el estado es 'solicitado'
                        if (pedido.estado === 'solicitado') {
                            contenedorBotones.append('<button class="btnRechazar" onclick="rechazarPedido(' + pedido.idPedido + ')">Rechazar pedido</button>');
                        }

                        // Agregar el contenedor de botones a la nueva sección de pedido
                        nuevaSeccionPedido.append(contenedorBotones);

                        // Agregar la nueva sección de pedido al contenedor
                        $('.pedidos-container').append(nuevaSeccionPedido);

                        // Agregar el ID del pedido confirmado al array
                        pedidosConfirmados.push(pedido.idPedido);
                    }
                }
            } else {
                // Manejar el caso de respuesta vacía o error
                console.log("No se recibieron datos de pedidos.");
            }
        }, 
        error: function(error) {
            console.log("Error al obtener pedidos:", error);
        }
    });
});

function avanzarEstado(idPedido, estadoPedido) {
    // Realiza la solicitud AJAX para rechazar el pedido
    $.ajax({
        url: '../../../Model/avanzarEstado.php',
        type: 'POST',
        dataType: 'json', // Indica que la respuesta es JSON
        data: { idPedido: idPedido, estadoPedido: estadoPedido }, // Envía el idPedido en la solicitud
        success: function(response) {
            console.log(response);
            location.reload(true);
        },
        error: function(error) {
            console.log("Error al avanzar el estado:", error);
        }
    });
}




function rechazarPedido(idPedido) {
    // Muestra un mensaje de alerta con el idPedido (puedes quitarlo si no lo necesitas)

    // Realiza la solicitud AJAX para rechazar el pedido
    $.ajax({
        url: '../../../Model/rechazarPedido.php',
        type: 'POST',
        dataType: 'json', // Indica que la respuesta es JSON
        data: { idPedido: idPedido }, // Envía el idPedido en la solicitud
        success: function(response) {
            console.log(response);
            location.reload(true);
        },
        error: function(error) {
            console.log("Error al rechazar pedido:", error);
            location.reload(true);
        }
    });
}



// Función para recargar la página
function recargarPagina() {
    location.reload(true);
}
