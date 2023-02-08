$("#registrarButton").click(function (event) {
    event.preventDefault();

    $('#spinner-div').show();

    let token = document.querySelector("input[name='_token']").value;
    let url = '/administracion/usuarios';
    const formCreacionUsuario = document.getElementById('formCreacionUsuario');
    const formData = new FormData(formCreacionUsuario);

    fetch(url, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': token,
            'Accept': 'application/json'
        },
        body: formData
    })
        .then(response => response.json())
        .then(function (response) {
        
            if (response.status == 'T') {
                alertify.success(response.message);
                setTimeout(function () {
                    window.location.href = '/administracion/usuarios';
                    $('#spinner-div').hide();
                }, 1000);
            } else {
                $('#spinner-div').hide();

                var msgText = '';
                response.message.forEach(function (valor, indice, array) {
                    msgText += valor + " </br>";
                });
                alertify.warning(msgText);

                return;
            }
        })
        .catch(function () {
            $('#spinner-div').hide();
            alertify.error('Ha ocurrido un error inesperado. Inténtelo más tarde.');
        });
});

