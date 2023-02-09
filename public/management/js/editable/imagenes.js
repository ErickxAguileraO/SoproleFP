$('#agregar-imagenes').click(function () {

    let html_file = '<div> ';
    html_file += '<input type="file" name="imagenes[]" class="input-img-admin validador-medidas-img-dinamicas" accept="image/*">';
    html_file += '<a>';
    html_file += '<i class="fas fa-trash delete_imagen" style="font-size: 25px;margin-left: 25px;color: #cd2222;" ></i>';
    html_file += '</a>';
    html_file += '</div>';

    $('#galeria_imagenes').append(html_file);
})

var generarEstiloEliminacion = (texto) => {
    let pre = document.createElement('pre');
    pre.style.maxHeight = "400px";
    pre.style.margin = "0";
    pre.style.padding = "24px";
    pre.style.whiteSpace = "pre-wrap";
    pre.style.textAlign = "justify";
    pre.style.backgroundColor = "#fffefe";
    pre.style.border = '1px solid #fff';
    pre.style.fontFamily = 'Hind';
    pre.style.fontSize = '16px';
    pre.style.lineHeight = 1.42857143;
    pre.style.color = '#182C40';
    pre.style.textAlign = 'center';
    pre.appendChild(document.createTextNode(texto));
    return pre;
}


$(document).on('click', '.delete_imagen', function () {
    $(this).parent().parent().remove()
})

$(document).on('click', '.delete_imagen_cargada', function () {

    let popUp = generarEstiloEliminacion('¿Está seguro que desea eliminar la imagen? esta acción no puede deshacerse');
    let codigo = parseInt($(this).parent().attr('codigo'));
    let td = $(this).parent().parent().parent();

    alertify.confirm(popUp, function () {
        url = `/administracion/editable/eliminar-imagen/${codigo}`;

        fetch(url, {
            method: 'GET',
        })
            .then(response => response.json())
            .then(function (response) {
                if (response.status == 'T') {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.message);
                    td.remove();

                } else {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.error(response.message);
                }
            })
            .catch(response => {
                alertify.set('notifier', 'position', 'top-right');
                alertify.error(response.message);
            });
    })
});