// Flex Slider
$(document).ready(function () {
    $('.flexslider-seccion').flexslider({
        animation: "slide",
    });

    var select = $("#filtro_segmento")[0];
    var selectCat = $("#filtro_categoria")[0];

    var values = "";
    Array.prototype.forEach.call(select.options, function (option, index) {
        url_string = decodeURI(window.location.href);
        url = new URL(url_string);
        options = url.searchParams.getAll("segmentoId[" + index + "]");

        if ($("#old_filtro_segmento").val().includes('"' + options[0] + '"')) {
            values = values + ',' + options[0];
            $("#filtro_segmento").val(values.split(','));
            $('#filtro_segmento').trigger('change');
        }
    });

    var values = "";
    Array.prototype.forEach.call(selectCat.options, function (option, index) {
        url_string = decodeURI(window.location.href);
        url = new URL(url_string);
        options = url.searchParams.getAll("categoriasId[" + index + "]");

        if ($("#old_filtro_categoria").val().includes('"' + options[0] + '"')) {
            values = values + ',' + options[0];
            $("#filtro_categoria").val(values.split(','));
            $('#filtro_categoria').trigger('change');
        }
    });
    $("#filtro_segmento, #filtro_categoria").change(function () {
        jQuery.ajax({
            url: '/productos',
            method: 'get',
            data: {
                segmentoId: $("#filtro_segmento").val(),
                categoriasId: $("#filtro_categoria").val()
            },
            success: function (result) {
                $('#contenidorProductos').empty().html(result);
            }
        });
    });
});