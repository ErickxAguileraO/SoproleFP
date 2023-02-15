
(function(){ 
    fetch("/administracion/dashboard/contar", {
        method: "GET",
    }).then(function (response) {
        return response.json();
    }).then(function (response) {
            $("#cont_slider").next().empty();
            $("#cont_slider").next().text(response.data.slider);

            $("#cont_editable").next().empty();
            $("#cont_editable").next().text(response.data.editable);

            $("#cont_alianza").next().empty();
            $("#cont_alianza").next().text(response.data.alianza);

            $("#cont_producto").next().empty();
            $("#cont_producto").next().text(response.data.producto);

            $("#cont_categoria").next().empty();
            $("#cont_categoria").next().text(response.data.categoria);

            $("#cont_receta").next().empty();
            $("#cont_receta").next().text(response.data.receta);

            $("#cont_segmento").next().empty();
            $("#cont_segmento").next().text(response.data.segmento);

            $("#cont_academia").next().empty();
            $("#cont_academia").next().text(response.data.academia);

            $("#cont_noticia").next().empty();
            $("#cont_noticia").next().text(response.data.noticia);

            $("#cont_contacto").next().empty();
            $("#cont_contacto").next().text(response.data.contacto);

            $("#cont_tipo_negocio").next().empty();
            $("#cont_tipo_negocio").next().text(response.data.tipo_negocio);

            $("#cont_subsegmento").next().empty();
            $("#cont_subsegmento").next().text(response.data.subsegmento);

            $("#cont_cliente").next().empty();
            $("#cont_cliente").next().text(response.data.clientes);

            $("#cont_local").next().empty();
            $("#cont_local").next().text(response.data.locales);

    }).catch(mensajeError => {
        console.log("Error")
    });
})();


