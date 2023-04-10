$(".btn-agregar").on("click", function (event) {

    event.preventDefault();

    fetch("/administracion/segmento/update", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $("input[name='_token']").val(),
        },
        body: new FormData(document.forms.namedItem("formSubmit"))

    }).then(function (response) {
        return response.json();
    }).then(function (response) {
        if (response.status == 'F') {
            alertify.set('notifier', 'position', 'top-right');
            alertify.error(response.message).dismissOthers();
        } else {
            alertify.set('notifier', 'position', 'top-right');
            alertify.success(response.message).dismissOthers();
            setTimeout(() => {
                document.location.href = "/administracion/segmento";
            }, 1000);
        }
    }).catch(mensajeError => {
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Ha ocurrido un error');
    });
});

var _URL = window.URL || window.webkitURL;

function ValidarMedidas(ancho, alto, input, file) {
    var file, img;
    if (file) {
        img = new Image();
        var objectUrl = _URL.createObjectURL(file);
        img.onload = function () {
            if (this.width != ancho || this.height != alto) {
                input.val('')
                alertify.set('notifier', 'position', 'top-right');
                alertify.error('La imagen debe tener ' + ancho + 'px de ancho y ' + alto + 'px de alto');
            }
            _URL.revokeObjectURL(objectUrl);
        };
        img.src = objectUrl;
    }
}
$(document).on('change', '#imagen', function () {
    ValidarMedidas(ancho, alto, $(this), this.files[0]);
});

$(document).ready(function () {
    var colorPicker = new iro.ColorPicker("#picker", {
        width: 250,
        color: color
    });
    colorPicker.on('color:change', function (color) {
        $("#color").val(color.hexString);
    });

    $(document).on('click', '#btn-reset-color', function () {
        colorPicker.color.hexString = colorAnterior
    });

    $("#color").change(function () {
        try {
            colorPicker.color.hexString = $(this).val()
        } catch (e) {
            alertify.set('notifier', 'position', 'top-right');
            alertify.warning('El color ingresado no es válido');
            $(this).val('');
        }
    });

    var colorPickerTexto = new iro.ColorPicker("#picker_texto", {
        width: 250,
        color: color_texto
    });
    colorPickerTexto.on('color:change', function (color) {
        $("#color_texto").val(color.hexString);
    });

    $("#color_texto").change(function () {
        try {
            colorPickerTexto.color.hexString = $(this).val()
        } catch (e) {
            alertify.set('notifier', 'position', 'top-right');
            alertify.warning('El color ingresado no es válido');
            $(this).val('');
        }
    });
});






