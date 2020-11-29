@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('equipo.update',$equipos->id) }}" method="post">

                    @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar equipo</h3>

                    <div class="form-group mt-5">
                        <label for="localidades_id">Localidad</label>
                        <select name="localidades_id" id="localidades_id" class="form-control" required>
                            <option value="">Seleccionar...</option>
                            @foreach($localidades as $localidad)
                                <option value="{{ $localidad->id }}">{{ $localidad->localidad }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre_equipo">Nombre del equipo</label>
                        <input type="text" id="nombre_equipo" class="form-control" name="nombre_equipo" value="{{$equipos->nombre_equipo}}">
                    </div>
                    <div class="form-group">
                        <label for="nombre_equipo">logo</label>
                        <input type="text" id="nombre_equipo" class="form-control" name="nombre_equipo" value="{{$equipos->logo}}">
                    </div>


                    <input class="btn btn-success my-3" type="submit" value="Actualizar Empresa">

                </form>

            </div>
        </div>
    </div>

@endsection
