$(".btn-agregar").on("click", function (event) {
    event.preventDefault();
    $('#spinner-div').show();
    fetch("/administracion/local/store", {
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
                document.location.href = "/administracion/local";
            }, 1000);
        }
    }).catch(mensajeError => {
        $('#spinner-div').hide();
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Ha ocurrido un error');
    });
});



$("#region").on("change", function (event) {
    event.preventDefault();
    $('#spinner-div').show();
    fetch("/administracion/local/get-comuna-by-region/" + $(this).val(), {
        method: "GET",
    }).then(function (response) {
        return response.json();
    }).then(function (response) {
        $('#spinner-div').hide();
        $("#comuna").empty();
        $("#comuna").append(response.html)
        $('#comuna').niceSelect('update'); 

    }).catch(mensajeError => {
        $('#spinner-div').hide();
        $("#comuna").empty();
        $("#comuna").append('<option value="">Seleccione una región</option>')
        $('#comuna').niceSelect('update'); 
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Seleccione una región');
    });
});



