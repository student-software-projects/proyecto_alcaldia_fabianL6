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
                                <th>NOMBRE DEL EQUIPO</th>
                                <th>LOGO</th>
                                <th>LOCALIDAD</th>
                                <th>FECHA CREACIÓN</th>
                            </tr>
                            </thead>
                            <tbody class="table-light">
                            <tr>
                                <td>{{ $equipos->nombre_equipo }}</td>
                                <td>{{ $equipos->logo }}</td>
                                <td>{{ $equipos->localidades->localidad }}</td>
                                <td>{{ $equipos->created_at }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
