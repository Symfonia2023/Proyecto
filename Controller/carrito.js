

$(document).ready(function() {
    // Verifica si se debe mostrar el mensaje después de recargar la página
    var mostrarMensajeDespuesRecarga = false;
    if (mostrarMensajeDespuesRecarga) {
        mostrarMensajeEliminar();
        mostrarMensajeDespuesRecarga = false; // Restablece la variable global a false después de mostrar el mensaje
    }
});


function eliminarMenu(idMenu, cantidad) {
    $.ajax({
        url: '../../Model/eliminarMenuCarrito.php',
        type: 'POST',
        data: { id: idMenu, cantidad: cantidad },
        success: function(response) {
            if (response === "true") {
                mostrarMensajeDespuesRecarga = true;
                location.reload();
            } else {
                alert("Error al eliminar el menú del carrito");
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log("Error en la llamada AJAX:", textStatus, errorThrown);
        }
    });
}

function mostrarMensajeEliminar() {
    $("#mensajeEmergente").fadeIn().delay(1500).fadeOut();
}
