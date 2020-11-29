@extends('layouts.admin.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">

                <div class="card-body">
                    <div class="card-header bg-primary"><label for="">DETALLES</label> </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-dark">
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>NUMERO DE CAMISA</th>
                                <th>APODO</th>
                                <th>NOMBRE DEL EQUIPO</th>
                                <th>FECHA CREACIÓN</th>
                            </tr>
                            </thead>
                            <tbody class="table-light">
                            <tr>
                                <td>{{ $jugadores->nombre }}</td>
                                <td>{{ $jugadores->apellido }}</td>
                                <td>{{ $jugadores->numero_camisa }}</td>
                                <td>{{ $jugadores->apodo }}</td>
                                <td>{{ $jugadores->equipos->nombre_equipo }}</td>
                                <td>{{ $jugadores->created_at }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
