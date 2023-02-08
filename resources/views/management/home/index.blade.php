@extends('layout.management')

@section('title', 'Dashboard')

@section('content')
    <div class="miCuenta">
        <h1>Dashboard</h1>
        <hr>
        <h5 class="fw-bold">Accesos frecuentes</h5>
        <div class="row">
            <div class="col">
                <ol class="list-group list-group-light list-group-numbered">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Ejemplo</div>
                            <span>Ejemplo</span><br>
                            <a href="#"><button type="button" class="btn btn-outline-danger btn-rounded my-1"
                                    data-mdb-ripple-color="dark">Crear</button></a>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Ejemplo</div>
                            <span>Ejemplo</span><br>
                            <a href="#"><button type="button" class="btn btn-outline-danger btn-rounded my-1"
                                    data-mdb-ripple-color="dark">Crear</button></a>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>

@endsection
