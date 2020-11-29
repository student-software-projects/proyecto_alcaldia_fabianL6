@extends('layouts.admin.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">


                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>NOMBRE DEL EQUIPO</th>
                            <th>LOGO</th>
                            <th>LOCALIDADES</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody class="table-light">
                        @foreach($equipos as $equipo)
                            <tr>
                                <td>{{ $equipo->nombre_equipo }}</td>
                                <td>{{ $equipo->logo }}</td>
                                <td>{{ $equipo->localidades->localidad }}</td>
                                <td>
                                    <form action="{{ route('equipo.destroy',$equipo->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('equipo.edit',$equipo->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        <a href="{{ route('equipo.show',$equipo->id) }}" class="btn btn-sm btn-info">Detalles</a>
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
