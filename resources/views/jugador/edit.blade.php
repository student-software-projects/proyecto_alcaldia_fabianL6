@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('jugador.update',$jugadores->id) }}" method="post">

                    @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar jugador</h3>

                    <div class="form-group mt-5">
                        <label for="equipos_id">Equipos</label>
                        <select name="equipos_id" id="equipos_id" class="form-control" required>
                            <option value="">Seleccionar...</option>
                            @foreach($equipos as $equipo)
                                <option {{ $equipo->id==$jugadores->equipos_id ? ' selected ' : ' '}} value="{{ $equipo->id }}">{{ $equipo->nombre_equipo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input name="nombre" id="nombre" type="text" class="form-control" value="{{$jugadores->nombre}}">
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input name="apellido" id="apellido" type="text" class="form-control" value="{{$jugadores->apellido}}">
                    </div>

                    <div class="form-group">
                        <label for="numero_camisa">No Camisa:</label>
                        <input name="numero_camisa" id="numero_camisa" type="text" class="form-control" value="{{$jugadores->numero_camisa}}">
                    </div>

                    <div class="form-group">
                        <label for="apodo">Apodo:</label>
                        <input name="apodo" id="apodo" type="text" class="form-control" value="{{$jugadores->apodo}}">
                    </div>


                    <input class="btn btn-success my-3" type="submit" value="Actualizar Jugador">

                </form>

            </div>
        </div>
    </div>

@endsection
