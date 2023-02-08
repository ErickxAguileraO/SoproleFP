document.addEventListener('DOMContentLoaded', function () {
    const botonActualizarPassword = document.getElementById('actualizarPasswordButton');
    botonActualizarPassword.addEventListener('click', function (event) {
        event.preventDefault();
        botonActualizarPassword.disabled = true;
        $("#spinner-div").show();

        let token = document.querySelector("input[name='_token']").value;
        let url = '/reset-password';
        let datosPost = {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
            password_confirmation: document.getElementById('password_confirmation').value,
            token: document.getElementById('token').value
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
            botonActualizarPassword.disabled = false;

            if ( typeof response.errors !== 'undefined' && typeof response.errors.password !== 'undefined' ) {
                $('#spinner-div').hide();
                alertify.error(response.errors.password.join(' '));

                return;
            }

            alertify.success(response.message);
            setTimeout(function () {

                window.location.href = '/login';
                $('#spinner-div').hide();
            }, 1000);
        })
        .catch(function () {
            $('#spinner-div').hide();
            alertify.error('Ha ocurrido un error inesperado. Inténtelo más tarde.');
        });
    });
});