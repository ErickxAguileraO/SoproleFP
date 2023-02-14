$(".btn-agregar").on("click", function (event) {

    event.preventDefault();

    fetch("/administracion/cliente/update", {
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
                    document.location.href = "/administracion/cliente";
                }, 1000);
            }
    }).catch(mensajeError => {
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('Ha ocurrido un error');
    });
});

document.addEventListener('input', (e) => {
    const rut = document.getElementById('rut');

    if (e.target === rut) {
        let rutFormateado = darFormatoRUT(rut.value);
        rut.value = rutFormateado;
    }
});

function darFormatoRUT(rut) {
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