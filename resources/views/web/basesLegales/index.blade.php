@extends('layout.web')

@section('title', 'Bases Legales')

@section('content')
    @push('extra-css')
    @endpush
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
                <div class="documento-n">
                    <p>Documento 1</p>
                    <div>
                        <button>Ver PDF</button>
                    </div>
                </div>
                <div class="documento-n">
                    <p>Documento 2</p>
                    <div>
                        <button>Ver PDF</button>
                    </div>
                </div>
                <div class="documento-n">
                    <p>Documento 3</p>
                    <div>
                        <button>Ver PDF</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
