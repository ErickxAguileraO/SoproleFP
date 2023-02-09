$(".btn-agregar").on("click", function (event) {

    event.preventDefault();

    fetch("/administracion/slider/store", {
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
                    document.location.href = "/administracion/slider";
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


