var getProductos = () => {
    $('#contenidorProductos').empty();
    $(".spinner").show();

    fetch("/productos/listar", {
        method: "POST",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': $("input[name='_token']").val(),
        },
        body: JSON.stringify({
            segmentos: $('#segmentosSeleccionados').val(),
            categorias: $('#categoriasSeleccionadas').val()
        })
    }).then(function (response) {
        return response.json();
    }).then(function (response) {
        $(".spinner").hide();
        $('#contenidorProductos').append(response.html)
    }).catch(mensajeError => {
        $(".spinner").hide();
    });
}

$(document).ready(function () {
    (getProductos)();

    $("#segmentosSeleccionados, #categoriasSeleccionadas").change(function () {
        (getProductos)();
    })
    $("#limpiarFiltros").click(function () {
        $('#segmentosSeleccionados').val('')
        $('#categoriasSeleccionadas').val('')

        $('#segmentosSeleccionados').selectpicker('refresh');
        $('#categoriasSeleccionadas').selectpicker('refresh');

        (getProductos)();
    })
});
