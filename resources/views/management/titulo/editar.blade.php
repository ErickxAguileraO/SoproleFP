@extends('layout.management')

@section('title', 'Editar titulos')

@section('content')
    <div class="formulario-admin-secciones">
        <div class="row">
            <h1>Editar títulos</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <!-- ========== Titulos home ========== -->
                        <h3>Home</h3>
                        <label for="titulo_uno_home"><strong> Segmento</strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_uno_home" class="form-control" id="titulo_uno_home" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->titulo}}" required>
                        </div>

                        <label for="descripcion_uno_home">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_uno_home" class="form-control" name="descripcion_uno_home" rows="4" cols="50">{{$result->descripcion}}</textarea>
                        </div>

                        <label for="titulo_dos_home"><strong>Academia </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_dos_home" class="form-control" id="titulo_dos_home" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_dos_home}}" required>
                        </div>

                        <label for="descripcion_dos_home">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_dos_home" class="form-control" name="descripcion_dos_home" rows="4" cols="50">{{$result->tit_descripcion_dos_home}}</textarea>
                        </div>

                        <label for="titulo_tres_home"><strong> Productos </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_tres_home" class="form-control" id="titulo_tres_home" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_tres_home}}" required>
                        </div>

                        <label for="descripcion_tres_home">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_tres_home" class="form-control" name="descripcion_tres_home" rows="4" cols="50">{{$result->tit_descripcion_tres_home}}</textarea>
                        </div>

                        <label for="titulo_cuatro_home"><strong> Recetas </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_cuatro_home" class="form-control" id="titulo_cuatro_home" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_cuatro_home}}" required>
                        </div>

                        <label for="descripcion_cuatro_home">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_cuatro_home" class="form-control" name="descripcion_cuatro_home" rows="4" cols="50">{{$result->tit_descripcion_cuatro_home}}</textarea>
                        </div>

                        <label for="titulo_cinco_home"><strong> Tendencia y noticias </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_cinco_home" class="form-control" id="titulo_cinco_home" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_cinco_home}}" required>
                        </div>

                        <label for="descripcion_cinco_home">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_cinco_home" class="form-control" name="descripcion_cinco_home" rows="4" cols="50">{{$result->tit_descripcion_cinco_home}}</textarea>
                        </div>

                        <label for="titulo_seis_home"><strong> Conócenos </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_seis_home" class="form-control" id="titulo_seis_home" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_seis_home}}" required>
                        </div>

                        {{-- <label for="descripcion_seis_home">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_seis_home" class="form-control" name="descripcion_seis_home" rows="4" cols="50">{{$result->tit_descripcion_seis_home}}</textarea>
                        </div> --}}

                        <!-- ========== Titulos Mini sitio ========== -->
                        <h3>Mini sitios</h3>
                        {{-- <label for="titulo_uno_mini_sitio"><strong> Segmento</strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_uno_mini_sitio" class="form-control" id="titulo_uno_mini_sitio" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->titulo}}" required>
                        </div>

                        <label for="descripcion_uno_mini_sitio">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_uno_mini_sitio" class="form-control" name="descripcion_uno_mini_sitio" rows="4" cols="50">{{$result->descripcion}}</textarea>
                        </div> --}}

                        <label for="titulo_dos_mini_sitio"><strong>Academia </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_dos_mini_sitio" class="form-control" id="titulo_dos_mini_sitio" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_dos_mini_sitio}}" required>
                        </div>

                        <label for="descripcion_dos_mini_sitio">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_dos_mini_sitio" class="form-control" name="descripcion_dos_mini_sitio" rows="4" cols="50">{{$result->tit_descripcion_dos_mini_sitio}}</textarea>
                        </div>

                        <label for="titulo_tres_mini_sitio"><strong> Productos </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_tres_mini_sitio" class="form-control" id="titulo_tres_mini_sitio" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_tres_mini_sitio}}" required>
                        </div>

                        <label for="descripcion_tres_mini_sitio">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_tres_mini_sitio" class="form-control" name="descripcion_tres_mini_sitio" rows="4" cols="50">{{$result->tit_descripcion_tres_mini_sitio}}</textarea>
                        </div>

                        <label for="titulo_cuatro_mini_sitio"><strong> Recetas </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_cuatro_mini_sitio" class="form-control" id="titulo_cuatro_mini_sitio" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_cuatro_mini_sitio}}" required>
                        </div>

                        <label for="descripcion_cuatro_mini_sitio">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_cuatro_mini_sitio" class="form-control" name="descripcion_cuatro_mini_sitio" rows="4" cols="50">{{$result->tit_descripcion_cuatro_mini_sitio}}</textarea>
                        </div>

                        <label for="titulo_cinco_mini_sitio"><strong> Tendencia y noticias </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_cinco_mini_sitio" class="form-control" id="titulo_cinco_mini_sitio" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->tit_titulo_cinco_mini_sitio}}" required>
                        </div>

                        <label for="descripcion_cinco_home">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_cinco_mini_sitio" class="form-control" name="descripcion_cinco_mini_sitio" rows="4" cols="50">{{$result->tit_descripcion_cinco_mini_sitio}}</textarea>
                        </div>

                        {{-- <label for="titulo_seis_mini_sitio"><strong> Conócenos </strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo_seis_mini_sitio" class="form-control" id="titulo_seis_mini_sitio" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->titulo}}" required>
                        </div>

                        <label for="descripcion_seis_mini_sitio">Descripción</label>
                        <div class="form-floating my-3">
                            <textarea id="descripcion_seis_mini_sitio" class="form-control" name="descripcion_seis_mini_sitio" rows="4" cols="50">{{$result->descripcion}}</textarea>
                        </div> --}}


                        <button class="btn btn-success btn-agregar">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/titulo/editar.js?v=' . rand()) }}"></script>
@endpush
