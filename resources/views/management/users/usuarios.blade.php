@extends('layout.management')

@section('title', 'Usuarios')

@section('content')

   <a class="btn btn-primary float-right" href="{{ route('administracion.usuarios.create') }}">Crear usuario</a>

   <h1>Usuarios</h1>
   <div class="dx-viewport demo-container">
      <div id="gridContainerUsuarios"></div>
   </div>
   
   @push('extra-js')
      <script src="{{ asset('public/management/js/usuarios/listado_usuarios.js') }}"></script>
   @endpush
@endsection