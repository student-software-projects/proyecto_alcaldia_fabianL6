@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <div class="row mb-5 mx-auto">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('jugador.store') }}" method="post">
                    @csrf
                    <div class="form-group mt-5">
                        <label for="equipos_id">Equipo</label>
                        <select name="equipos_id" id="equipos_id" class="form-control" required>
                            <option value="">Seleccionar...</option>
                            @foreach($equipos as $equipo)
                                <option value="{{ $equipo->id }}">{{ $equipo->nombre_equipo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input name="nombre" id="nombre" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input name="apellido" id="apellido" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="numero_camisa">No Camisa:</label>
                        <input name="numero_camisa" id="numero_camisa" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="apodo">Apodo:</label>
                        <input name="apodo" id="apodo" type="text" class="form-control">
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Jugador</button>
                </form>

            </div>
        </div>
    </div>


@endsection
