@extends('layout.web')

@section('title', $editable->edi_titulo)

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <section class="solo-texto">
            <h2>{{ $editable->edi_titulo }}</h2>
            {!! $editable->edi_contenido !!}
    </div>
@endsection
