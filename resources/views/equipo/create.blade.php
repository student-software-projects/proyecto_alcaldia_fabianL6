@extends('layouts.admin.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('equipo.store') }}" method="post">
                    @csrf
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
                        <input name="nombre_equipo" id="nombre_equipo" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="logo">Descripción del producto</label>
                        <input name="logo" id="logo" type="text" class="form-control">
                    </div>

                    <hr>
                    <button type="submit" class="btn btn-primary">Guardar Equipo</button>
                </form>

            </div>
        </div>
    </div>


@endsection
