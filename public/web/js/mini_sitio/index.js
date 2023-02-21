$(document).on('click', '.tags', function (event) {
    $(".spinner").show();
    $('.removeSection').remove()

    var attr = $(this).attr('style');
    if (typeof attr !== 'undefined' && attr !== false) {
        $(".tags").each(function () {
            $(this).removeAttr('style');
        });
        fetch("/mini-sitio/filtro/reset/" + $("#segmento_id").val(), {
            method: "GET",
        }).then(function (response) {
            return response.json();
        }).then(function (response) {
            $(".spinner").hide();
            $('.contenidoMiniSitio').append(response.html)
        }).catch(mensajeError => {
            $(".spinner").hide();
        });

        return;
    } else {

        $(".tags").each(function () {
            $(this).removeAttr('style');
        });
        $(this).attr('style', 'background:#EDA532 !important; color:white !important');

        fetch("/mini-sitio/filtro/tags/" + $(this).attr('codigo') + "/" + $("#segmento_id").val(), {
            method: "GET",
        }).then(function (response) {
            return response.json();
        }).then(function (response) {
            $(".spinner").hide();
            $('.contenidoMiniSitio').append(response.html)
        }).catch(mensajeError => {
            $(".spinner").hide();
        });
    }






});

