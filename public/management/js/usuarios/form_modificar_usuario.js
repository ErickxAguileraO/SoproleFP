document.addEventListener('DOMContentLoaded', function () {
    function construirMensajeValidacion(errores) {
        let mensaje = '';
        mensaje += typeof errores.nombre !== 'undefined' ? ' ' + errores.nombre.join(' ') : '';
        mensaje += typeof errores.email !== 'undefined' ? ' ' + errores.email.join(' ') : '';
        mensaje += typeof errores.estado !== 'undefined' ? ' ' + errores.estado.join(' ') : '';
        
        return mensaje;
    }

    const botonActualizarUsuario = document.getElementById('actualizarButton');
    botonActualizarUsuario.addEventListener('click', function (event) {
        event.preventDefault();
        $('#spinner-div').show();

        let token = document.querySelector("input[name='_token']").value;
        let idUsuario = document.querySelector("input[name='idUsuario']").value;
        let url = `/administracion/usuarios/${idUsuario}`;
        const formModificacionUsuario = document.getElementById('formModificacionUsuario');
        const formData = new FormData(formModificacionUsuario);
        
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

    const checkSeleccionarTodos = document.getElementById('checkAll');
    checkSeleccionarTodos.addEventListener('click', function () {
        const checkBoxesPermissions = document.querySelectorAll("input[type='checkbox'].checkPermission");
        
        for (let index = 0; index < checkBoxesPermissions.length; index++) {
            const checkPermission = checkBoxesPermissions[index];
            
            if ( this.checked ) {
                checkPermission.setAttribute('checked', true);
            } else {
                checkPermission.removeAttribute('checked');
            }
        }
    });
});