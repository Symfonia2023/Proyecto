$(document).ready(function() {
    // Verifica si se debe mostrar el mensaje después de recargar la página
    var mostrarMensajeDespuesRecarga = getCookie("mostrarMensajeDespuesRecarga");
    if (mostrarMensajeDespuesRecarga === "true") {
        mostrarMensajeEliminar();
        document.cookie = "mostrarMensajeDespuesRecarga=false; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    }
});

function eliminarMenu(idMenu, cantidad) {
    $.ajax({
        url: '../../Model/eliminarMenuCarrito.php',
        type: 'POST',
        data: { id: idMenu, cantidad: cantidad },
        success: function(response) {
            if (response === "true") {
                document.cookie = "mostrarMensajeDespuesRecarga=true; path=/;";
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

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
