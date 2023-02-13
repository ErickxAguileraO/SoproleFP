var generarFormData = () => {
    let formData = new FormData(document.forms.namedItem("formSubmit"));
    formData.append('contenido', textContenido.getData());
    return formData;
}

$(".btn-agregar").on("click", function (event) {

    event.preventDefault();
    $('#spinner-div').show();
    fetch("/administracion/receta/store", {
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
                document.location.href = "/administracion/receta";
            }, 1000);
        }
    }).catch(mensajeError => {
        $('#spinner-div').hide();
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Ha ocurrido un error');
    });
});

var textContenido;
ClassicEditor.create(document.querySelector('#contenido'), {
    ckfinder: {
        uploadUrl: '/image-upload?_token=' + $("input[name='_token']").val(),
    }
}).then(editor => {
    textContenido = editor;
})

