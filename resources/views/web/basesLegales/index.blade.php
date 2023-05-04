@extends('layout.web')

@section('title', 'Bases Legales')

@section('content')
    <div class="contenido">
        <div class="bases-legales">

            <h1>Bases legales</h1>
            <div class="tabla-bases">
                <div class="titulo">
                    <p>Consursos</p>
                    <div>
                        <p>Ver documento</p>
                    </div>
                </div>
                @foreach ($documentos as $doc)
                    <div class="documento-n">
                        <p>{{ $doc->dbs_nombre }}</p>
                        <div>
                            <a target="_blank" href="{{ $doc->dbs_archivo }}">Ver PDF</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
