// Flex Slider
$(document).ready(function () {
    $('.flexslider-seccion').flexslider({
        animation: "slide",
    });

    var old_filtro_segmento = $("#old_filtro_segmento").val().replace('[', '').replace(']', '').replace(/"/g, '');
    var old_filtro_categoria = $("#old_filtro_categoria").val().replace('[', '').replace(']', '').replace(/"/g, '');

    if (old_filtro_segmento) {
        $("#filtro_segmento").val(old_filtro_segmento.split(','));
        $('#filtro_segmento').trigger('change');
    }

    if (old_filtro_categoria) {
        $("#filtro_categoria").val(old_filtro_categoria.split(','));
        $('#filtro_categoria').trigger('change');
    }

    const buscarProductos = () => {
        $(".spinner").show();
        $("#contenidorProductos").empty();

        jQuery.ajax({
            url: '/productos',
            method: 'GET',
            data: {
                segmentoId: $("#filtro_segmento").val(),
                categoriasId: $("#filtro_categoria").val()
            },
            success: function (result) {
                $(".spinner").hide();
                
                $('#contenidorProductos').empty().html(result);
            }
        });
    }

    $("#filtro_segmento, #filtro_categoria").change(function () {
        (buscarProductos)();
    });

    $("#limpiarFiltros").click(function(){
        $('#filtro_segmento,#filtro_categoria ').val('');
        $('#filtro_segmento,#filtro_categoria ').selectpicker("refresh");
        (buscarProductos)();
    })
});