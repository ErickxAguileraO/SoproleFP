(function(){ 
    DevExpress.localization.locale(navigator.language);
    $('#grid-container').dxDataGrid({
        dataSource: '/administracion/cliente/listar',
        columnAutoWidth: true,
        hoverStateEnabled: true,
        columnHidingEnabled: false,
        allowColumnReordering: true,
        searchPanel: {
            visible: true,
            width: 240,
            placeholder: 'Buscar...',
        },
        headerFilter: {
            visible: true,
        },
        filterRow: {
            visible: true,
            applyFilter: 'auto',
            betweenStartText: 'Inicio',
            betweenEndText: 'Fin',
        },
        pager: {
            allowedPageSizes: [25, 50, 100],
            showInfo: true,
            showNavigationButtons: true,
            showPageSizeSelector: true,
            visible: true,
        },
        paging: {
            pageSize: 25,
        },
        columns: [

            {
                dataField: 'clie_nombre',
                caption: 'Nombre',
                allowEditing: false,
            },
            {
                dataField: 'clie_estado',
                caption: 'Estado',
                allowEditing: false,
                lookup: {
                    dataSource: {
                        store: {
                            type: 'array',
                            data: [{
                                id: 0,
                                name: 'Inactivo'
                            },
                            {
                                id: 1,
                                name: 'Activo'
                            },
                            ],
                            key: "id"
                        },
                    },
                    valueExpr: 'id',
                    displayExpr: 'name'
                },
            },
            {
                caption: 'Acciones',
                alignment: 'center',
                hidingPriority: 0,
                cellTemplate(container, options) {
                    let html_editar = '<a href="/administracion/cliente/editar/' + options.data.clie_id + '" class="edit" style="color: #DD5702; font-size: 20px; margin-right:10px;"><i class="fas fa-edit"></i></a>';
                    let html_eliminar = '<a class="eliminar" codigo="' + options.data.clie_id + '" style="color: #DD5702; font-size: 20px;"><i class="fas fa-trash"></i></a>';
                    return $(html_editar + html_eliminar);
                }
            }],
    }).dxDataGrid('instance');
})();

function generarEstiloEliminacion(texto) {
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

$(document).on('click', '.eliminar', function () {

    let popUp = generarEstiloEliminacion('¿Está seguro de eliminar el registro? Esta acción no puede deshacerse.');
    let codigo = parseInt($(this).attr('codigo'));

    alertify.confirm(popUp, function () {

        fetch('/administracion/cliente/eliminar/'+codigo, {
            method: 'get',
        })
            .then(response => response.json())
            .then(function (response) {
                if (response.status == 'T') {
                    alertify.set('notifier', 'position', 'top-right');
                    alertify.success(response.message);
                    document.location.reload();
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
