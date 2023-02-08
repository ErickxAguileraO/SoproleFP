(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
    });

    DevExpress.localization.locale(navigator.language);

    // Función para el origen de datos.
    const usuarios = new DevExpress.data.CustomStore({
        load: function () {
            return sendRequest("/administracion/usuarios/listado");
        }
    });

    $('#gridContainerUsuarios').dxDataGrid({
        dataSource: usuarios,
        columns: [
            {
                dataField: 'name',
                caption: 'Nombre'
            },
            {
                dataField: 'email',
                caption: 'Email'
            },
            {
                dataField: '',
                caption: 'Opciones',
                alignment: 'center',
                hidingPriority: 4,
                cellTemplate(container, options) {
                    const idUsuario = options.data.id;

                    let templateEliminar = `<a id="enlaceEliminarUsuario" codigo="${idUsuario}" style="color: #DD5702; font-size: 20px;"><i class="fas fa-trash"></i></a>`;
                    let templateModificar = `<a href="/administracion/usuarios/${idUsuario}/perfil" class="edit" style="color: #DD5702; font-size: 20px; margin-right:10px;"><i class="fas fa-edit"></i></a>`;

                    const enlaceModificar = $('<a />').append(templateModificar).appendTo(container);
                   // const enlaceEliminar = $('<a />').append(templateEliminar).appendTo(container);
                }
            }
        ],
        paging: {
            pageSize: 20
        },
        pager: {
            showNavigationButtons: true,
            visible: true,
            showPageSizeSelector: true,
            allowedPageSizes: [20, 30, 40, 50]
        }
    });

    function sendRequest(url, method, data) {
        let d = $.Deferred();
        method = method || "GET";
        $.ajax(url, {
            method: method || "GET",
            data: data,
            cache: false,
            xhrFields: {
                withCredentials: true
            }
        }).done(function (result) {
            d.resolve(result);
        }).fail(function (xhr) {
            d.reject(xhr.responseJSON ? xhr.responseJSON.Message : xhr.statusText);
        });

        return d.promise();
    }
})();