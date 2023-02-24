<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>correo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            margin: 0;
        }
        a{
            text-decoration: none;
        }
        p{
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            text-align: justify;

            color: #2B414F;
        }
        h4{
            font-weight: 700;
            font-size: 16px;
            line-height: 24px;
            text-align: justify;

            color: #2B414F; 
        }
        .logo{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 120px;
            padding: 10px 0px 20px 0px;
        }
        .texto-correo{
            padding: 35px;
        }

        .lineas{
            width: 100%;
            height: 30px ;
            margin-bottom: 30px;
            background: #13355D;
        }
        footer{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        footer p{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 16px;
            line-height: 26px;
            /* identical to box height */

            text-align: justify;

            color: #021878;
        }
        footer a{
            font-weight: 400;
            font-size: 16px;
            line-height: 26px;
            /* identical to box height */

            text-align: justify;

            color: #021878;
        }
        .center-text-icon{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }
        .iconos-link{
            display: flex;
            align-items: center;
            gap: 30px;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="{{ asset('/public/web/imagenes/logo.svg') }}" alt="">
    </div>
    <div class="lineas">
    </div>
    <div class="texto-correo">
        <h4>Estimado/a usuario/a:</h4>
        <br>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit similique magnam amet qui obcaecati, 
            non eaque. Laboriosam in repellat molestias voluptatibus, veritatis labore culpa fugit rerum cumque, 
            possimus perspiciatis quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque a nulla 
            blanditiis alias mollitia sed dolores adipisci veniam reprehenderit cupiditate nostrum rerum harum 
            magnam iusto illum, sapiente aspernatur sunt corrupti!</p>
        <br>
        <p>Pellentesque sit,</p>
        <p>sapien.</p>
    </div>
    
    <div style="width: 100%; height: 120px; background: #13355D; margin-bottom: 20px;">

    </div>

    <footer>
        <p>Encuentranos en redes sociales</p>
        <div class="iconos-link">
            <a href="https://www.instagram.com/soprolefp/?hl=es" target="_blank"><img src="{{ asset('/public/web/imagenes/i-insta-azul.svg') }}" alt=""></a>
            <a href="https://www.facebook.com/SoproleFP/?locale=es_LA" target="_blank"><img src="{{ asset('/public/web/imagenes/i-facebook-azul.svg') }}" alt=""></a>
        </div> 
        <br>
        
        <div class="center-text-icon">
            <img src="{{ asset('/public/web/imagenes/i-correo.svg') }}" alt="">   
            <a href="mailto:soproleFP@soprole.cl">soproleFP@soprole.cl</a>
        </div>

        <div class="center-text-icon">
            <img src="{{ asset('/public/web/imagenes/i-telefono.svg') }}" alt="">
            <a href="tel:6006006600"><h3>600 600 6600</h3></a>
        </div>

    </footer>
</body>
</html>