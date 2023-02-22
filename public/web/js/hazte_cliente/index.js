$(".btn-agregar").on("click", function (event) {
    event.preventDefault();
    $('#spinner-div').show();
    resetValidationMessages();
    if($("#rut").val().length < 11){
        document.getElementById('rut_error').innerText = 'El rut debe tener al menos 11 caracteres';
        $('#spinner-div').hide();
        return;
    }
    fetch("/hazte-cliente/store", {
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
            $("#formSubmit").attr('style','padding: 100px;text-align: center;');   
        }
    }).catch(mensajeError => {
        $('#spinner-div').hide();
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
    });
});



const setValidationMessages = (response) => {
    for (let i=0; i<response.errors.length; i++) {
        if(response.errors[i].toLowerCase().includes("razon social")){
            document.getElementById('razon_social_error').innerText = response.errors[i].replace('razon social', 'razón social');
        }
        if(response.errors[i].toLowerCase().includes("rut")){
            document.getElementById('rut_error').innerText = response.errors[i];
        }
        if(response.errors[i].toLowerCase().includes("tipo negocio")){
            document.getElementById('tipo_negocio_error').innerText = response.errors[i].replace('tipo negocio', 'tipo de negocio');
        }
        if(response.errors[i].toLowerCase().includes("cual")){
            document.getElementById('cual_error').innerText = response.errors[i]
        }
        if(response.errors[i].toLowerCase().includes("calle")){
            document.getElementById('calle_error').innerText = response.errors[i].replace('calle', 'calle del negocio');
        }
        if(response.errors[i].toLowerCase().includes("numero")){
            document.getElementById('numero_error').innerText = response.errors[i].replace('numero', 'número');
        }
        if(response.errors[i].toLowerCase().includes("region")){
            document.getElementById('region_error').innerText = response.errors[i].replace('region', 'región');
        }
        if(response.errors[i].toLowerCase().includes("comuna")){
            document.getElementById('comuna_error').innerText = response.errors[i];
        }
        if(response.errors[i].toLowerCase().includes("nombre")){
            document.getElementById('nombre_error').innerText = response.errors[i];
        }
        if(response.errors[i].toLowerCase().includes("telefono")){
            document.getElementById('telefono_error').innerText = response.errors[i].replace('telefono', 'teléfono');
        }
        if(response.errors[i].toLowerCase().includes("correo")){
            document.getElementById('correo_error').innerText = response.errors[i];
        }
    }
}

const resetValidationMessages = () => {
    $("#razon_social_error, #rut_error,#tipo_negocio_error,#cual_error,#calle_error ,#numero_error ,#region_error,#comuna_error,#nombre_error,#telefono_error,#correo_error").text('');
}


const isNumberKey = (evt) => {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

const darFormatoRUT = (rut) => {
    const rutLimpio = rut.replace(/[^0-9kK]/g, '');
    const cuerpo = rutLimpio.slice(0, -1);
    const dv = rutLimpio.slice(-1).toUpperCase();

    if (rutLimpio.length < 2) return rutLimpio;

    let cuerpoFormatoMiles = cuerpo
        .toString()
        .split('')
        .reverse()
        .join('')
        .replace(/(?=\d*\.?)(\d{3})/g, '$1.');

    cuerpoFormatoMiles = cuerpoFormatoMiles
        .split('')
        .reverse()
        .join('')
        .replace(/^[\.]/, '');

    return `${cuerpoFormatoMiles}-${dv}`;
}

document.addEventListener('input', (e) => {
    const rut = document.getElementById('rut');
    if (e.target === rut) {
        let rutFormateado = darFormatoRUT(rut.value);
        rut.value = rutFormateado;
    }
});




