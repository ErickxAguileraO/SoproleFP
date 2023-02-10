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

// Menu movil
$(".btn-hamburger").click(function(){
  $(".barra-menu-movil").css({'left':'0%'});
});
$(".btn-close").click(function(){
  $(".barra-menu-movil").css({'left':'100%'});
});
$(".btn-productos-movil").click(function(){
  $(".barra-productos-movil").css({'left':'0%'});
});
$(".volver-movil").click(function(){
  $(".barra-productos-movil").css({'left':'100%'});
});
$(".volver-movil2").click(function(){
  $(".barra-productos-lista-movil").css({'left':'100%'});
  $(".ocultar-producto-lista").css({'display':'none'});
});


$(".btn-noticias-movil").click(function(){
  $(".barra-noticias-movil").css({'left':'0%'});
});
$(".volver-movil").click(function(){
  $(".barra-noticias-movil").css({'left':'100%'});
});


$(".producto-lista").click(function(){
  $(".barra-productos-lista-movil").css({'left':'0%'});
});
$(".volver-movil").click(function(){
  $(".barra-productos-lista-movil").css({'left':'100%'});
});

// Botones de segmentos a lista
$(".btn-pasteleria-segmento").click(function(){
  $(".producto-lista-pasteleria").css({'display':'block'});
});

$(".btn-italiana-segmento").click(function(){
  $(".producto-lista-italiana").css({'display':'block'});
});

$(".btn-rapida-segmento").click(function(){
  $(".producto-lista-rapida").css({'display':'block'});
});

$(".btn-cafeteria-segmento").click(function(){
  $(".producto-lista-cafeteria").css({'display':'block'});
});

$(".btn-servicios-segmento").click(function(){
  $(".producto-lista-servicios").css({'display':'block'});
});


$(".tienda").click(function(){
  $(".flex-modal-tienda").css({'display':'flex'});
});
$(".cerrar-modal").click(function(){
  $(".flex-modal-tienda").css({'display':'none'});
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


// Slider

$('.carruselImagenes').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 6,
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 6,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 6
        }
      },
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 6
        }
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 6
        }
      },
      {
        breakpoint: 580,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 6
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
})



$('.carruselRecetas').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 1100,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 990,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 580,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
})