$(document).ready(function () {

    notifications();
    iniciarCroppie();
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': document.querySelector('[name=_token]').value
        }
    });
    
    $('.iconoVerPw').click(function () {
        $(this).toggleClass("bi-eye-slash bi-eye");
        const input = $(this).parent().find("input");
        (input.attr('type') === 'password') ? input.attr('type', 'text') : input.attr('type', 'password')
    });

});

const notifications = () => {

    const message = document.getElementById('msg-notify');
    const type = document.getElementById('type-notify');
    const route = document.getElementById('route-notify');

    if (!message || !type) return;

    alertify.set('notifier', 'position', 'top-right');

    if (type.value == 'success') alertify.success(message.value);
    if (type.value == 'error') alertify.error(message.value);

    if (route.value) setTimeout(() => window.location.href = route.value, 2000);

    message.remove();
    type.remove();
    route.remove();
}


const iniciarCroppie = () => {

    const croppies = document.querySelectorAll('.croppie-image');

    if (croppies.length <= 0) return;

    croppies.forEach((image, index) => {
        const defaul_image = image.closest('.croppie-container').querySelector('.default-image-croppie');
        const min_width = image.getAttribute('data-min-width');
        const min_height = image.getAttribute('data-min-height');

        let crop;
        let razon = 1;

        element = document.querySelectorAll('.imagen-input')[index];
        element && element.addEventListener('change', (event) => {
            const file = event.target.files[0];
            const reader = new FileReader();
            const extensions = ['image/jpg', 'image/jpeg', 'image/png'];

            //validamos las extensiones aceptadas
            if (!extensions.includes(file.type)) {
                event.target.value = '';
                alertify.set('notifier', 'position', 'top-right');
                return alertify.error('La imagen no cumple con el formato.');
            }

            reader.onload = function (e) {

                const newImage = new Image();
                newImage.src = e.target.result;

                newImage.onload = function () {

                    //validamos el tamaño de la imagen
                    if (min_width > this.width || min_height > this.height) {
                        event.target.value = '';
                        alertify.set('notifier', 'position', 'top-right');
                        return alertify.error('La imagen no cumple con el tamaño mínimo.');
                    }

                    if (min_width > 1500) {
                        razon = 4;
                    } else if (min_width >= 500 && min_width < 1500) {
                        razon = 2;
                    }

                    image.classList.remove('d-none');
                    image.classList.add('d-inline-block', 'w-auto');

                    defaul_image.classList.add('d-none');

                    if (crop) crop.destroy();

                    crop = new Croppie(image, {
                        enableExif: true,
                        url: e.target.result,
                        viewport: {
                            width: min_width / razon,
                            height: min_height / razon,
                        },
                        boundary: {
                            width: (min_width / razon) + 30,
                            height: (min_height / razon) + 30
                        }
                    });
                };
            }

            if (file) reader.readAsDataURL(file);
        });

        element = document.querySelectorAll('.cancel-croppie')[index];
        element && element.addEventListener('click', (e) => cancelCroppie(defaul_image, image));

        element = document.querySelectorAll('.add-image-croppie')[index];
        element && element.addEventListener('click', (e) => {

            if (image.classList.contains('d-none')) return;

            const boton = e.currentTarget;
            const isSingleImage = image.classList.contains('single-image');

            crop.result({
                type: 'base64',
                format: 'jpeg|png|jpg',
                quality: 1,
                //size: 'original',
                size: { width: min_width, height: min_height }
            }).then(function (base64) {
                const new_image = document.createElement('img');
                const container = document.createElement('div');
                const input = document.createElement('input');
                const icon = "<button class='btn btn-danger position-absolute delete-image-croppie' type='button' style='right:20px'><i class='fas fa-trash-alt text-white pointer-none'></i></button>";

                new_image.src = base64;
                new_image.classList.add('w-100');

                input.name = "imagenes[]";
                input.type = "hidden";
                input.value = base64;

                container.classList.add('col-sm-6', 'col-md-4', 'pb-5');
                container.append(input);
                container.append(new_image);
                container.innerHTML += icon;


                if (isSingleImage) boton.closest('.croppie-container').querySelector('.images-gallery').innerHTML = container.outerHTML;
                if (!isSingleImage) boton.closest('.croppie-container').querySelector('.images-gallery').append(container);

                boton.closest('.croppie-container').querySelector('.imagen-input').value = '';

                cancelCroppie(defaul_image, image);
            });
        });
    });
}

const sendRequest = (url, form, method = 'POST') => {

    $("#spinner-div").show();

    const data = new FormData(form);

    $.ajax({
        url: url,
        method: method || "GET",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function (response) {
            console.log('hola amigo');
            if (response.status == 419) window.location.href = response.redirect;

            if (response.result) {

                $('.modal').modal('hide');

                if (response.message) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.message);
                }
                console.log(response.redirect)
                if (response.redirect) {
                    setTimeout(function () {
                        window.location.href = response.redirect;
                    }, 300);
                }
                
            } else {
                if (response.message) {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(response.message);
                }
            }

        },
        error: function (response) {

            let res = null;

            if (response.status >= 500) {
                res = response.statusText;
            } else {
                var errors = [];

                if (response.responseJSON.errors) {
                    jQuery.each(response.responseJSON.errors, function (index, item) {
                        errors.push(item);
                    });
                }

                let cadena = errors.join();
                res = cadena.replace(/,/g, '<br>');
            }

            alertify.set('notifier', 'position', 'top-right');
            alertify.error(res);


        },
        complete: function () {
            $("#spinner-div").hide();
        }
    });
}

const eliminar = (route) => {

    alertify.confirm("Desea eliminar este registro?", function () {
        $.ajax({
            url: route,
            type: 'DELETE',
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.result) {
                    // loadTable();
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.message);

                    setTimeout(function () {
                        window.location.href = response.redirect;
                    }, 500);
                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(response.message);
                }
            }, error: function (xhr, textStatus, error) {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error('Error al eliminar el registro');
            }
        });
    }).set({ title: "Eliminar Registro" }).set({ labels: { ok: 'Aceptar', cancel: 'Cancelar' } });
}

 


/**********************************
 * Funciones auxiliares
 *********************************/

 const cancelCroppie = (defaul_image, image) => {
    defaul_image.classList.remove('d-none');
    image.classList.add('d-none');
    image.classList.remove('d-inline-block', 'w-auto');
}


// Secciones
$('.tipo-seleccion').on('change',function(){
    var selectValor = $(this).val();
    //alert (selectValor);
    if (selectValor == 'tipo-0') {
        $(".tipo-n").css({'display':'none'}); 
    }
    if (selectValor == 'tipo-1') {
        $(".tipo-n").css({'display':'none'}); 
        $(".tipo-texto").css({'display':'block'}); 
    }

    if (selectValor == 'tipo-2') {
        $(".tipo-n").css({'display':'none'}); 
        $(".tipo-documento").css({'display':'block'});      
    }
    if (selectValor == 'tipo-3') {
        $(".tipo-n").css({'display':'none'}); 
        $(".tipo-img").css({'display':'block'});      
    }
    if (selectValor == 'tipo-4') {
        $(".tipo-n").css({'display':'none'}); 
        $(".tipo-img-txt").css({'display':'block'});             
    }
    if (selectValor == 'tipo-5') {
        $(".tipo-n").css({'display':'none'}); 
        $(".tipo-video").css({'display':'block'});             
    }
});
// Input Documentos
const contenedor2 = document.querySelector('#dinamic-2');
//const btnAgregar2 = document.querySelector('#agregar-2');

let total2 = 1;
/*
btnAgregar2.addEventListener('click', e2 => {
    let div = document.createElement('div');
    div.innerHTML = `
    <input type="text" class="input-txt-seccion2" placeholder="Nombre del archivo" requireds>
    <input type="file" id="doc" class="input-img-admin2" required>
    <button class="btn-eliminar-file2" onclick="eliminarInput2(this)"><i class="fa-solid fa-trash-can"></i></button>`;
    contenedor2.appendChild(div);
})*/

/**
 * Método para eliminar el div contenedor del input
 * @param {this} e2 
 */
const eliminarInput2 = (e2) => {
    const divPadre2 = e2.parentNode;
    contenedor2.removeChild(divPadre2);
    actualizarContador();
};



// Input texto mas img
const contenedor = document.querySelector('#dinamic');
//const btnAgregar = document.querySelector('#agregar');

let total = 1;

/*
btnAgregar.addEventListener('click', e => {
    let div = document.createElement('div');
    div.innerHTML = `
    <input type="file" id="images" class="input-img-admin" accept="image/*" required><button class="btn-eliminar-file" onclick="eliminarInput(this)"><i class="fa-solid fa-trash-can"></i></button>`;
    contenedor.appendChild(div);
})*/

/**
 * Método para eliminar el div contenedor del input
 * @param {this} e 
 */
const eliminarInput = (e) => {
    const divPadre = e.parentNode;
    contenedor.removeChild(divPadre);
    actualizarContador();
};

