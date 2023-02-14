(function(){ 
    DevExpress.localization.locale(navigator.language);
    $('#grid-container').dxDataGrid({
        dataSource: '/administracion/contacto/listar',
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
                dataField: 'con_nombre',
                caption: 'Nombre',
                allowEditing: false,
            },
            {
                dataField: 'con_telefono',
                caption: 'Teléfono',
                allowEditing: false,
            },
            {
                dataField: 'con_email',
                caption: 'Correo',
                allowEditing: false,
            },
            {
                dataField: 'con_empresa',
                caption: 'Empresa',
                allowEditing: false,
            },
            {
                caption: 'Acciones',
                alignment: 'center',
                hidingPriority: 0,
                cellTemplate(container, options) {
                    return $('<a href="/administracion/contacto/ver/' + options.data.con_id + '" class="edit" style="color: #DD5702; font-size: 20px; margin-right:10px;"><i class="fas fa-eye"></i></a>');
                    
                }
            }],
    }).dxDataGrid('instance');
})();
