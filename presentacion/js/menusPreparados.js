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
    const sectionMenuContent = $(`.section-menu-${tipo} .sectionMenu-content`);

    if (sectionMenuContent.css("display") === "none") {
        sectionMenuContent.css("display", "flex");
        sectionMenuContent.hide().fadeIn(500); // Aplicar fadeIn después de cambiar a display: flex
    } else {
        sectionMenuContent.fadeOut(500, function() {
            sectionMenuContent.css("display", "none");
        });
    }
}
