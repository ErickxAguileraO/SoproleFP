@extends('layout.management')

@section('title', 'Crear slider')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.noticia.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            <input type="hidden" name="noticia_id" value="{{ $noticia->not_id }}" />
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo"
                                autocomplete="new-password" value="{{ $noticia->not_titulo }}" required>
                            <label for="titulo">Título</label>
                        </div>

                        <div class="form-floating my-3">
                            <input type="text" name="titulo2" class="form-control" id="titulo2" placeholder="titulo2"
                                autocomplete="new-password" value="{{ $noticia->not_titulo2 }}" required>
                            <label for="titulo2">Título 2</label>
                        </div>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50" placeholder="Contenido">{{ $noticia->not_contenido }}</textarea>
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
                                    @foreach ($noticia->imagenes as $imagen)
                                        <tr style="vertical-align: middle;">
                                            <td>
                                                <img src="{{ $imagen->ino_imagen }}" alt=""
                                                    title="Welcome To Pakainfo.com" style="height: 150px;">
                                            </td>
                                            <td>
                                                <a target="_blank" href='{{ $imagen->ino_imagen }}'>
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a target="_blank" style="color:rgb(178, 16, 16)"
                                                    codigo='{{ $imagen->ino_id }}'>
                                                    <i class="fas fa-trash delete_imagen_cargada"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>

                                <button class="btn btn-success btn-agregar">Agregar</button>
                            </div>
                        </div>
                    </div>
        </form>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/noticias/editar.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/noticias/imagenes.js?v=' . rand()) }}"></script>
@endpush
