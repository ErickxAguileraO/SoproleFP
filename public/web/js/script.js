$('#iniciacion-actividades').on('change',function(){
    var selectValor = $(this).val();
    //alert (selectValor);
    var asunto_tipo = document.getElementById("iniciacion-actividades");
    if (selectValor == 'no') {
        $(".flex-ventana-locales").css({'display':'flex'});
        asunto_tipo.value = "no";
        resetValidationMessages()
    }
});

$(".cerrar-ventana-ubicacion").click(function(){
    $(".flex-ventana-locales").css({'display':'none'});
});