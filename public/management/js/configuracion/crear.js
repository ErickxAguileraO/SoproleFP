var generarFormData = () => {
    let formData = new FormData(document.forms.namedItem("formSubmit"));
    formData.append('contenido', textContenido.getData());
    return formData;
}

$(".btn-agregar").on("click", function (event) {

    event.preventDefault();
    $('#spinner-div').show();
    fetch("/administracion/configuracion/store", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $("input[name='_token']").val(),
        },
        body: generarFormData()

    }).then(function (response) {
        return response.json();
    }).then(function (response) {
        $('#spinner-div').hide();
        if (response.status == 'F') {
            alertify.set('notifier', 'position', 'top-right');
            alertify.error(response.message).dismissOthers();
        } else {
            alertify.set('notifier', 'position', 'top-right');
            alertify.success(response.message).dismissOthers();
            setTimeout(() => {
                document.location.href = "/administracion/configuracion";
            }, 1000);
        }
    }).catch(mensajeError => {
        $('#spinner-div').hide();
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

var textContenido;
ClassicEditor.create(document.querySelector('#contenido'), {
    ckfinder: {
        uploadUrl: '/image-upload?_token=' + $("input[name='_token']").val(),
    }
}).then(editor => {
    textContenido = editor;
})

$(document).on('change', '#imagen', function () {
    ValidarMedidas(ancho, alto, $(this), this.files[0]);
});


