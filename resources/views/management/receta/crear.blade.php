@extends('layout.management')

@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush


@section('title', 'Crear receta')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.receta.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear receta</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" value=""
                                required>
                        </div>

                        <label for="dificultad">Dificultad</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="dificultad" id="dificultad" class="tipo-seleccion">
                                    <option value="1">Fácil</option>
                                    <option value="2">Intermedio</option>
                                    <option value="3">Difícil</option>
                                </select>
                            </div>
                        </div>

                        <label for="">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50"></textarea>
                        </div>

                        <label for="">Ingredientes</label>
                        <div class="form-floating my-3">
                            <textarea id="ingredientes" class="form-control" name="ingredientes" rows="4" cols="50"></textarea>
                        </div>

                        <label for="">Porciones</label>
                        <div class="form-floating my-3">
                            <textarea id="porciones" class="form-control" name="porciones" rows="4" cols="1"></textarea>
                        </div>

                        <label for="">Preparación</label>
                        <div class="form-floating my-3">
                            <textarea id="preparacion" class="form-control" name="preparacion" rows="4" cols="50"></textarea>
                        </div>                        

                        <label for="imagen">Imagen ({{ $ancho ."px ancho x ".$alto."px alto"}})</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="imagen" name="imagen">
                            </div>
                        </div>

                        <label for="video">Video</label>
                        <div class="form-floating my-3">
                            <input type="text" name="video" class="form-control" id="video"
                                autocomplete="new-password" value="" required>
                        </div>

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

                        <label for="orden">Segmentos</label>
                        <div style="margin-top: 15px;">
                            @foreach ($segmentos as $segmento)
                                <label class="containerCheckbox">{{ $segmento->seg_nombre }}
                                    <input type="checkbox" name="segmentos[]" value="{{ $segmento->seg_id }}">
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                        <br />


                        <label for="orden">Productos</label>
                        <div style="margin-top: 15px;">
                            @foreach ($productos as $producto)
                                <label class="containerCheckbox">{{ $producto->pro_titulo }}
                                    <input type="checkbox" name="productos[]" value="{{ $producto->pro_id }}">
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                        <br />


                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>


                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option value="1">Activo
                                    </option>
                                    <option value="0">Inactivo</option>
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
    <script src="{{ asset('public/management/js/receta/crear.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/receta/imagenes.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
