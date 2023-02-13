$(".btn-agregar").on("click", function (event) {

    event.preventDefault();
    $('#spinner-div').show();
    fetch("/administracion/tipo-negocio/store", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': $("input[name='_token']").val(),
        },
        body: new FormData(document.forms.namedItem("formSubmit"))

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
                document.location.href = "/administracion/tipo-negocio";
            }, 1000);
        }
    }).catch(mensajeError => {
        $('#spinner-div').hide();
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Ha ocurrido un error');
    });
});


