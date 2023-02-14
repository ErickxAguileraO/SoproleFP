@extends('layout.management')

@section('title', 'Editar local')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.local.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar local</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="local_id" value="{{ $local->loc_id }}" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" value="{{ $local->loc_nombre }}"
                                required>

                        </div>
                        <label for="estado">Región</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="region" id="region" class="tipo-seleccion">
                                    <option value="">Seleccione</option>
                                    @foreach ($regiones as $region)
                                        <option {{ $region_actual == $region->reg_id ? 'selected' : false }}
                                            value="{{ $region->reg_id }}">{{ $region->reg_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label for="estado">Comuna</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="comuna" id="comuna" class="tipo-seleccion">
                                    @foreach ($comunas as $comuna)
                                        <option {{ $local->loc_comuna_id == $comuna->com_id ? 'selected' : false }}
                                            value="{{ $comuna->com_id }}">{{ $comuna->com_nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="{{ $local->loc_orden }}" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>


                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">

                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option {{ $local->loc_estado == 1 ? 'selected' : false }} value="1">Activo
                                    </option>
                                    <option {{ $local->loc_estado == 0 ? 'selected' : false }} value="0">Inactivo
                                    </option>
                                </select>
                            </div>

                        </div>
                        <button class="btn btn-success btn-agregar">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/local/editar.js?v=' . rand()) }}"></script>
@endpush
