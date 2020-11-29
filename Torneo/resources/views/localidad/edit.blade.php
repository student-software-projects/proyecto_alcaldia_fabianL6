@extends('layouts.admin.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 card card-body shadow p-3 mb-5 bg-white rounded mx-auto">
                <form action="{{ route('localidad.update',$localidad->id) }}" method="post">

                    @csrf
                    {{method_field('PATCH')}}

                    <h3 class="mb-5">Editar localidad</h3>
                    <div class="form-group">
                        <label for="localidad">Nombre de la localidad</label>
                        <input type="text" id="localidad" class="form-control" name="localidad" value="{{$localidad->localidad}}">
                    </div>


                    <input class="btn btn-success my-3" type="submit" value="Actualizar Empresa">

                </form>

            </div>
        </div>
    </div>

@endsection
