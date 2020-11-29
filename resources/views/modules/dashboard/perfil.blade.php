@extends('layouts.admin.app')

@section('content')

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header" style="background: #152036;">
                    <label for="edit" class="text-white">Editar perfil</label>
                </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img mx-auto p-2"><img src="https://www.bocajuniors.com.ar/rebrand/images/copas/copa-sudamericana.png" alt=""> </div>
                                        <div class="card-description text-center">
                                            <label for="user" class="lead my-3">Admin</label>
                                        </div>

                                </div>
                            </div>

                            <div class="col-md-8">
                                <form action="" method="post">
                                    <label class="mt-2">Correo:</label>
                                    <input type="email" value="{{ $usuario->email }}" placeholder="Digite su correo electronico" class="form-control" name="email">

                                    <label class="mt-3">Contraseña:</label>
                                    <input type="password" placeholder="Digite una nueva contraseña" class="form-control" name="pass">

                                    <label class="mt-3">Repite tu contraseña:</label>
                                    <input type="password" placeholder="Repite tu nueva contraseña" class="form-control" name="pass">

                                    <button class="btn btn-success mt-4">Actualizar perfil</button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>




@endsection
