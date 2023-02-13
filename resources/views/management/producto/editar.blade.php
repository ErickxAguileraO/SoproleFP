@extends('layout.management')

@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush

@section('title', 'Crear producto')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.producto.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            <input type="hidden" name="producto_id" value="{{ $producto->pro_id }}" />
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo"
                                value="{{ $producto->pro_titulo }}" required>
                        </div>
                        <label for="sku">SKU</label>
                        <div class="form-floating my-3">
                            <input type="text" name="sku" class="form-control" id="sku"
                                value="{{ $producto->pro_sku }}" required>
                        </div>
                        <label for="formato">Formato</label>
                        <div class="form-floating my-3">
                            <input type="text" name="formato" class="form-control" id="formato"
                                value="{{ $producto->pro_formato }}" required>
                        </div>


                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50" placeholder="Contenido">{{ $producto->pro_contenido }}</textarea>
                        </div>


                        <label for="">Conservación</label>
                        <div class="form-floating my-3">
                            <textarea id="conservacion" class="form-control" name="conservacion" rows="4" cols="50">{{ $producto->pro_conservacion }}</textarea>
                        </div>

                        <label for="categoria">Categorias</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="categoria" id="categoria" class="tipo-seleccion">
                                    <option value="">Seleccione</option>
                                    @foreach ($categorias as $categoria)
                                        <option {{ $producto->pro_categoria_id == $categoria->cat_id ? 'selected' : false }}
                                            value="{{ $categoria->cat_id }}">{{ $categoria->cat_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label for="vida_util">Vida útil</label>
                        <div class="form-floating my-3">
                            <input type="text" name="vida_util" class="form-control" id="vida_util"
                                value="{{ $producto->pro_vida_util }}" required>
                        </div>

                        <label for="unidades_venta">Unidades en venta</label>
                        <div class="form-floating my-3">
                            <input type="text" name="unidades_venta" class="form-control" id="unidades_venta"
                                value="{{ $producto->pro_unidades_venta }}" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>




                        <div>
                            <div class="wp-documentos-right tipo-img-txt">
                                <label for="">Galería</label>
                                <div id="galeria_imagenes">
                                    <div>
                                        <input type="file" name="imagenes[]"
                                            class="input-img-admin validador-medidas-img-dinamicas" accept="image/*">
                                    </div>
                                </div>
                                <div class="flex-btn-file-img">
                                    <div class="btn-file-img" id="agregar-imagenes">Agregar</div>
                                </div>
                            </div>

                            <table id="tabla" class="nowrap table table-hover table-striped bd-l" width="100%"
                                border="0" cellpadding="0" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 126px;">Imagen</th>
                                        <th scope="col" style="width: 120px;">Ver</th>
                                        <th scope="col" style="width: 86px;">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($producto->imagenes as $imagen)
                                        <tr style="vertical-align: middle;">
                                            <td>
                                                <img src="{{ $imagen->ipr_imagen }}" alt=""
                                                    title="Welcome To Pakainfo.com" style="height: 150px;">
                                            </td>
                                            <td>
                                                <a target="_blank" href='{{ $imagen->ipr_imagen }}'>
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a target="_blank" style="color:rgb(178, 16, 16)"
                                                    codigo='{{ $imagen->ipr_id }}'>
                                                    <i class="fas fa-trash delete_imagen_cargada"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <label for="orden">Sub-Segmentos</label>
                            <div style="margin-top: 15px;">
                                @foreach ($subsegmentos as $subsegmento)
                                    <label class="containerCheckbox">{{ $subsegmento->sse_nombre }}
                                        <input
                                            {{ in_array($subsegmento->sse_id, $subsegmentosSeleccionados) ? 'checked' : false }}
                                            type="checkbox" name="subsegmentos[]" value="{{ $subsegmento->sse_id }}">
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                            </div>
                            <br />
                            <label for="orden">Orden</label>
                            <div class="form-floating my-3">
                                <input type="text" name="orden" class="form-control" id="orden"
                                    placeholder="orden" autocomplete="new-password" value="{{ $producto->pro_orden }}"
                                    required
                                    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            </div>
                            <div>
                                <label for="estado">Estado</label>
                                <div class="row mb-3">
                                    <div class="form-floating my-3">
                                        <select name="estado" id="estado" class="tipo-seleccion">
                                            <option {{ $producto->pro_estado == 1 ? 'selected' : false }} value="1">
                                                Activo
                                            </option>
                                            <option {{ $producto->pro_estado == 0 ? 'selected' : false }} value="0">
                                                Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-success btn-agregar">Agregar</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/producto/editar.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/producto/imagenes.js?v=' . rand()) }}"></script>
@endpush
