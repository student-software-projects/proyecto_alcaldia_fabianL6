@extends('layouts.admin.app')

@section('content')





    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">





                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr>
                            <th>LOCALIDAD</th>
                            <th>FECHA CREACIÓN</th>
                            <th>OPCIONES</th>
                        </tr>
                        </thead>
                        <tbody class="table-light">
                        @foreach($localidades as $localidad)
                            <tr>
                                <td>{{ $localidad->localidad }}</td>
                                <td>{{ $localidad->created_at }}</td>
                                <td>
                                    <form action="{{ route('localidad.destroy',$localidad->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('localidad.edit',$localidad->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>

                                        <a href="{{ route('localidad.show',$localidad->id) }}" class="btn btn-sm btn-info">Detalles</a>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
