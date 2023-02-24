<div style="text-align: center;font-family: 'Poppins', sans-serif;margin: 0;">

    <div style="justify-content: center;text-align: center; width: 100%; height: 120px;padding: 10px 0px 20px 0px;">
        <img src="{{ env('APP_URL') . '/public/web/imagenes/logo.png' }}" alt="" />
    </div>

    <div class="lineas" style="width: 100%; height: 30px ; margin-bottom: 30px; background: #13355D;"></div>

    <section class="texto-correo" style="padding: 35px;">
        <h4 style="font-weight: 700; font-size: 16px;line-height: 24px;  text-align: center;color: #2B414F; ">
            Estimado/a usuario/a:</h4>
        <br>
        <p style="font-weight: 400;font-size: 16px; line-height: 24px; text-align: center;color: #2B414F;">Se ha
            registrado una nueva solicitud del formulario <b>Hazte cliente</b>, el detalle se presenta a continuación:
        </p>
        <table style="border-collapse: collapse; margin: 0 auto; font-size: 16px; font-family: sans-serif;min-width: 400px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);width: 50%;">
            <tbody>
                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Razón social</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_razon_social'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Rut</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_rut'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Tipo</td>
                    <td style="">{{ $datosFormulario['tipo'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">¿Cual?</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_cual'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Dirección</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_direccion'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Número</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_numero'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Región</td>
                    <td style="">{{ $datosFormulario['region'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Comuna</td>
                    <td style="">{{ $datosFormulario['comuna'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Nombre</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_nombre'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Teléfono</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_telefono'] }}</td>
                </tr>

                <tr style=" padding: 12px 15px;border-bottom: 1px solid #dddddd;">
                    <td style=" padding: 12px 15px;font-weight: 400;">Correo</td>
                    <td style="">{{ $datosFormulario['datos']['fhc_correo'] }}</td>
                </tr>
            </tbody>
        </table>
    </section>

    <div style="width: 100%; height: 120px; background: #13355D; margin-bottom: 20px;"></div>

    <section style="text-align: center;">
        <p style="font-weight: 700;  font-size: 16px;   line-height: 26px; text-align: center; color: #021878;">
            Encuentranos en redes sociales</p>
        <div style="text-align: center;gap: 30px;">
            <a style=" text-decoration: none;" href="https://www.instagram.com/soprolefp/?hl=es" target="_blank"><img
                    src="{{ env('APP_URL') . '/public/web/imagenes/i-insta-azul.png' }}" alt=""></a> &nbsp; &nbsp; &nbsp;
            <a style=" text-decoration: none;" href="https://www.facebook.com/SoproleFP/?locale=es_LA"
                target="_blank"><img src="{{ env('APP_URL') . '/public/web/imagenes/i-facebook-azul.png' }}"
                    alt=""></a>
        </div>
        <br>

        <div style=" justify-content: center; text-align: center;  gap: 5px;">
            <img src="{{ env('APP_URL') . '/public/web/imagenes/i-correo.png' }}" alt="">
            <a style=" text-decoration: none;" href="mailto:soproleFP@soprole.cl"> &nbsp;soproleFP@soprole.cl</a>
        </div>

        <div style=" justify-content: center; text-align: center; gap: 5px;">

            <a style=" text-decoration: none;" href="tel:6006006600">
                <h3><img src="{{ env('APP_URL') . '/public/web/imagenes/i-telefono.png' }}" alt=""> &nbsp;600
                    600 6600</h3>
            </a>
        </div>

    </section>
</div>
