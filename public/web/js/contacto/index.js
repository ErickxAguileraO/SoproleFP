$(".btn-agregar").on("click", function (event) {
    event.preventDefault();
    $('#spinner-div').show();

    resetValidationMessages();

    fetch("/contacto/store", {
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
            setValidationMessages(response)
        } else {
            $("#formSubmit").empty()
            $("#formSubmit").append('<h2>Su solicitud ha sido enviada correctamente</h2><h4>nos contáctaremos con usted a la brevedad</h4>');
            $("#formSubmit").attr('style', 'padding: 300px;text-align: center;');
        }
    }).catch(mensajeError => {
        $('#spinner-div').hide();
    });
});
const setValidationMessages = (response) => {
    for (let i = 0; i < response.errors.length; i++) {
        if (response.errors[i].toLowerCase().includes("telefono")) {
            document.getElementById('telefono_error').innerText = response.errors[i].replace('telefono', 'teléfono');
        }
        if (response.errors[i].toLowerCase().includes("correo")) {
            document.getElementById('correo_error').innerText = response.errors[i];
        }
        if (response.errors[i].toLowerCase().includes("consulta")) {
            document.getElementById('consulta_error').innerText = response.errors[i];
        }
    }
}

const resetValidationMessages = () => {
    $("#telefono_error,#correo_error,#consulta_error").text('');
}
const isNumberKey = (evt) => {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$(document).ready(function () {
    $('.flexslider-seccion').flexslider({
        animation: "slide",
    });
});