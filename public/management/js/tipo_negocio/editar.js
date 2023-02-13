$(".btn-agregar").on("click", function (event) {

    event.preventDefault();

    fetch("/administracion/tipo-negocio/update", {
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
                    document.location.href = "/administracion/tipo-negocio";
                }, 1000);
            }
    }).catch(mensajeError => {
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Ha ocurrido un error');
    });
});