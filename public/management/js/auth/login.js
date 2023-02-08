document.addEventListener('DOMContentLoaded', function () {
    const botonLogin = document.getElementById('btnLogin');
    botonLogin.addEventListener('click', function (event) {
        event.preventDefault();
        $("#spinner-div").show();

        let token = document.querySelector("input[name='_token']").value;
        let url = '/login';
        let datosPost = {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value
        };
        
        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json'
            },
            body: JSON.stringify(datosPost)
        })
        .then(response => response.json())
        .then(function (response) {
            if ( response.resultado ) {
                alertify.success(response.mensaje);

                setTimeout(function () {
                    window.location.href = response.url_redireccion;
                    $('#spinner-div').hide();
                }, 1000);
            } else {
                $('#spinner-div').hide();
                alertify.error('Las credenciales no coinciden con nuestros registros.');
            }
        })
        .catch(function (error) {
            $('#spinner-div').hide();
            alertify.error('Ha ocurrido un error inesperado. Inténtelo más tarde.');
        });
    });

    const botonRecuperarPass = document.getElementById('recupararPassBoton');
    botonRecuperarPass.addEventListener('click', function (event) {
        event.preventDefault();

        let token = $("input[name='_token']").val();
        let url = '/forgot-password';
        let datosPost = {
            email: document.getElementById('emailRecuperacion').value,
        };

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json'
            },
            body: JSON.stringify(datosPost)
        })
        .then(response => response.json())
        .then(function (response) {
            if ( typeof response.errors !== 'undefined' && typeof response.errors.email !== 'undefined' ) {
                alertify.error(response.errors.email.join(' '));

                return;
            }

            alertify.success(`${response.message}. Revise su email.`);
        })
        .catch(function (error) {
            alertify.error(error);
        })
    });
});