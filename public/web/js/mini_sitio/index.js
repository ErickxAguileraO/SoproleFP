$(document).on('click', '.tags', function (event) {
    $(".spinner").show();
    $('.removeSection').remove()
    fetch("/mini-sitio/filtro/tags/" + $(this).attr('codigo')+"/"+$("#segmento_id").val(), {
        method: "GET",
    }).then(function (response) {
        return response.json();
    }).then(function (response) {
        $(".spinner").hide();
        $('.contenidoMiniSitio').append(response.html)
    }).catch(mensajeError => {
        $(".spinner").hide();
    });
});

