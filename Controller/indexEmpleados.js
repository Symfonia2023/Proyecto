$(document).ready(function () {
    $.ajax({
        url: '../../../Model/obtenerPedidos.php',
        type: 'POST',
        contentType: 'application/json',
        success: function(response) {
            console.log(response)
        }, 
        error: function(error) {
            console.log(error);
        }
    });
});































function recargarPagina(){
    location.reload();
}
