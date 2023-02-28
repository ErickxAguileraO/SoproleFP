


const listarLocales = (region, comuna) => {

    $('#spinner-div').show();

    fetch("/hazte-cliente/listar/locales/" + region + "/" + comuna, {
        method: "GET",
    }).then(function (response) {
        return response.json();
    }).then(function (response) {
        $('#ubicaciones').empty()
        $('#ubicaciones').append(response.html)
        $('#spinner-div').hide();


        $(".pagination").remove();
        $("#ubicaciones").pagify(5, ".single-item");

    }).catch(mensajeError => {
        $('#spinner-div').hide();
    });
}



$("#comunaModal").on("change", function (event) {
    listarLocales($("#regionModal").val(), $("#comunaModal").val());
});

$("#regionModal").on("change", function (event) {
    event.preventDefault();
    $('#spinner-div').show();
    fetch("/web/get-comuna-by-region/" + $(this).val(), {
        method: "GET",
    }).then(function (response) {
        return response.json();
    }).then(function (response) {
        $('#spinner-div').hide();
        $("#comunaModal").empty();
        $("#comunaModal").append('<option value="0">Seleccione una opción</option>' + response.html)
        $('#comunaModal').niceSelect('update');

        listarLocales($("#regionModal").val(), 0);

    }).catch(mensajeError => {
        $('#spinner-div').hide();
        $("#comunaModal").empty();
        $("#comunaModal").append('<option value="">Seleccione una región</option>')
        $('#comunaModal').niceSelect('update');
    });
});

$(document).on("click", ".ubicacion-n", function () {

    if ($(this).children().next().is(':visible')) {
        $(this).children().children().next().attr('src', '/public/web/imagenes/i-flecha-abajo.svg');
        $(this).children().next().hide();
    } else {
        $(this).children().next().show()
        $(this).children().children().next().attr('src', '/public/web/imagenes/x-black.svg');
    }
});


$('#iniciacion-actividades').on('change', function () {
    var selectValor = $(this).val();
    var asunto_tipo = document.getElementById("iniciacion-actividades");
    
    if (selectValor == 'no') {

        $("#formSubmit input").prop("disabled", true);
        $("#region, #comuna, #tipo_negocio").prop("disabled", true);

        $(".btn-agregar").prop("disabled", true);

        $(".flex-ventana-locales").css({ 'display': 'flex' });
        asunto_tipo.value = "no";
        listarLocales(0, 0);
    }else{
        $("#formSubmit input").prop("disabled", false);
        $("#region, #comuna, #tipo_negocio").prop("disabled", false);
        $(".btn-agregar").prop("disabled", false);
    }

    $('select').niceSelect('update');

    
});

$(".cerrar-ventana-ubicacion").click(function () {
    $(".flex-ventana-locales").css({ 'display': 'none' });
});


