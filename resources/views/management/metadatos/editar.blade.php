@extends('layout.management')

@section('title', 'Metadatos')

@section('content')
    <div class="formulario-admin-secciones">
        <div class="row">
            <h1>Metadatos</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <!-- ========== Metadatos ========== -->

                        <label for="meta_titulo"><strong> Meta title</strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="meta_titulo" class="form-control" id="meta_titulo" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->met_titulo}}" required>
                        </div>
                        <label for="meta_descripcion"><strong> Meta description</strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="meta_descripcion" class="form-control" id="meta_descripcion" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->met_descripcion}}" required>
                        </div>
                        <label for="meta_key"><strong> Meta key</strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="meta_key" class="form-control" id="meta_key" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->met_key}}" required>
                        </div>
                        <label for="meta_analytics"><strong> Código Analytics</strong></label>
                        <div class="form-floating my-3">
                            <input type="text" name="meta_analytics" class="form-control" id="meta_analytics" placeholder="titulo"
                                autocomplete="new-password" value="{{$result->met_codigo_analytics}}" required>
                        </div>

                        <button class="btn btn-success btn-agregar">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/metadatos/editar.js?v=' . rand()) }}"></script>
@endpush
