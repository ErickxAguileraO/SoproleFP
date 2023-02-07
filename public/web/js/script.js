// Ventana de ubicaciones
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

// Acordeones
$('.drop-down').click(function(event) {
    event.preventDefault();
    $('.ocultar-acordeon').slideUp();
    $(this).next('.ocultar-acordeon').slideDown();
});

// Vista previa producto-receta
const main_img = document.querySelector('.main_img')
const thumbnails = document.querySelectorAll('.thumbnail')


thumbnails.forEach(thumb => {
    thumb.addEventListener('click', function(){
        const active = document.querySelector('.active')
        active.classList.remove('active')
        thumb.classList.add('active')
        main_img.src = thumb.src
    })
})