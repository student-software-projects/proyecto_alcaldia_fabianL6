@extends('layouts.admin.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">


                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>NUMERO CAMISA</th>
                            <th>APODO</th>
                            <th>EQUIPO</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody class="table-light">
                        @foreach($jugadores as $jugador)
                            <tr>
                                <td>{{ $jugador->nombre }}</td>
                                <td>{{ $jugador->apellido }}</td>
                                <td>{{ $jugador->numero_camisa }}</td>
                                <td>{{ $jugador->apodo }}</td>
                                <td>{{ $jugador->equipos->nombre_equipo }}</td>
                                <td>
                                    <form action="{{ route('jugador.destroy',$jugador->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('jugador.edit',$jugador->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        <a href="{{ route('jugador.show',$jugador->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>











@endsection
