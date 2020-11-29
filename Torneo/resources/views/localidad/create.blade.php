@extends('layouts.admin.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
            <form action="{{ route('localidad.store') }}" method="post">

                @csrf

                <h3 class="mb-5">Formulario localidad</h3>
                <div class="form-group">
                    <label for="localidad">Nombre de la localidad</label>
                    <input type="text" id="localidad" class="form-control" name="localidad">
                </div>

                <button class="btn btn-primary mt-3">Guardar Localidad</button>
            </form>

        </div>
    </div>
</div>


@endsection
