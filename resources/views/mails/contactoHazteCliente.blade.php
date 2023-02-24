<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>correo</title>
    <link rel="StyleSheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">

</head>

<body style=" display: flex;
flex-direction: column;
align-items: center;
font-family: 'Poppins', sans-serif;margin: 0;">
    <div class="logo"
        style=" display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 120px;
    padding: 10px 0px 20px 0px;">
        <img src="{{ env('APP_URL').'/public/web/imagenes/logo.png' }}" alt="">
    </div>
    <div class="lineas" style=" width: 100%;
    height: 30px ;
    margin-bottom: 30px;
    background: #13355D;">
    </div>
    <div class="texto-correo" style="padding: 35px;">
        <h4
            style="   font-weight: 700;
        font-size: 16px;
        line-height: 24px;
        text-align: justify;
        color: #2B414F; ">
            Estimado/a usuario/a:</h4>
        <br>
        <p style="font-weight: 400;font-size: 16px; line-height: 24px; text-align: justify;color: #2B414F;">Se ha
            registrado una nueva solicitud del formulario <b>Hazte cliente</b>, el detalle se presenta a continuación:
        </p>
        <table style="border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);width: 100%;">
            <tbody>
                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Razón social</td>
                    <td style="">{{$datosFormulario['datos']['fhc_razon_social']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Rut</td>
                    <td style="">{{$datosFormulario['datos']['fhc_rut']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Tipo</td>
                    <td style="">{{$datosFormulario['tipo']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">¿Cual?</td>
                    <td style="">{{$datosFormulario['datos']['fhc_cual']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Dirección</td>
                    <td style="">{{$datosFormulario['datos']['fhc_direccion']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Número</td>
                    <td style="">{{$datosFormulario['datos']['fhc_numero']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Región</td>
                    <td style="">{{$datosFormulario['region']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Comuna</td>
                    <td style="">{{$datosFormulario['comuna']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Nombre</td>
                    <td style="">{{$datosFormulario['datos']['fhc_nombre']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Teléfono</td>
                    <td style="">{{$datosFormulario['datos']['fhc_telefono']}}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;">Correo</td>
                    <td style="">{{$datosFormulario['datos']['fhc_correo']}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="width: 100%; height: 120px; background: #13355D; margin-bottom: 20px;">

    </div>

    <footer style=" display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;">
        <p
            style="font-weight: 400;font-size: 16px;line-height: 24px;text-align: justify;color: #2B414F;  display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-weight: 700;
        font-size: 16px;
        line-height: 26px;
        text-align: justify;
        color: #021878;">
            Encuentranos en redes sociales</p>
        <div class="iconos-link" style="  display: flex;
        align-items: center;
        gap: 30px;">
            <a style=" text-decoration: none;" href="https://www.instagram.com/soprolefp/?hl=es" target="_blank"><img
                    src="{{  env('APP_URL').'/public/web/imagenes/i-insta-azul.png' }}" alt=""></a>
            <a style=" text-decoration: none;" href="https://www.facebook.com/SoproleFP/?locale=es_LA"
                target="_blank"><img src="{{  env('APP_URL').'/public/web/imagenes/i-facebook-azul.png' }}" alt=""></a>
        </div>
        <br>

        <div class="center-text-icon"
            style="  display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 5px;">
            <img src="{{  env('APP_URL').'/public/web/imagenes/i-correo.png' }}" alt="">
            <a style=" text-decoration: none;" href="mailto:soproleFP@soprole.cl">soproleFP@soprole.cl</a>
        </div>

        <div class="center-text-icon"
            style="  display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 5px;">
            <img src="{{  env('APP_URL').'/public/web/imagenes/i-telefono.png' }}" alt="">
            <a style=" text-decoration: none;" href="tel:6006006600">
                <h3>600 600 6600</h3>
            </a>
        </div>

    </footer>
</body>

</html>
