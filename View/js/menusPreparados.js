$(document).ready(function() {
    $("#cerrarVentana").click(cerrarVentana);
    
    function cerrarVentana() {
        $(".ventanaComidas-emergente").hide();
    }
});

$("#menu-semanal-title").click(function() {
    toggleContenido("semanal");
});

$("#menu-quincenal-title").click(function() {
    toggleContenido("quincenal");
});

$("#menu-mensual-title").click(function() {
    toggleContenido("mensual");
});

function toggleContenido(tipo) {
    const sectionMenuContent = $(`#section-menu-${tipo} .sectionMenu-content`);

    if (sectionMenuContent.css("display") === "none") {
        sectionMenuContent.css("display", "flex");
        sectionMenuContent.hide().fadeIn(400);
    } else {
        sectionMenuContent.fadeOut(400, function() {
            sectionMenuContent.css("display", "none");
        });
    }
}

