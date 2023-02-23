(function(){ 
    DevExpress.localization.locale(navigator.language);
    $('#grid-container').dxDataGrid({
        dataSource: '/administracion/hazte-cliente/listar',
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
                dataField: 'fhc_rut',
                caption: 'Rut',
                allowEditing: false,
            },
            {
                dataField: 'fhc_razon_social',
                caption: 'Razón social',
                allowEditing: false,
            },
            {
                dataField: 'fhc_direccion',
                caption: 'Dirección',
                allowEditing: false,
            },
            {
                dataField: 'fhc_nombre',
                caption: 'Nombre',
                allowEditing: false,
            },
            {
                dataField: 'fhc_telefono',
                caption: 'Teléfono',
                allowEditing: false,
            },

            {
                caption: 'Acciones',
                alignment: 'center',
                hidingPriority: 0,
                cellTemplate(container, options) {
                    let html_editar = '<a href="/administracion/hazte-cliente/ver/' + options.data.fhc_id + '" class="edit" style="color: #DD5702; font-size: 20px; margin-right:10px;"><i class="fas fa-eye"></i></a>';
                    return $(html_editar);
                }
            }],
    }).dxDataGrid('instance');
})();
