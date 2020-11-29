@extends('layouts.auth.app')
@section('content')
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-dark"><i class="mdi mdi-home-variant h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-primary p-3">
                                        <h5 class=" text-center lead">TORNEO</h5>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-body pt-0 mt-3">

                            <div class="p-2">
                                <form class="form-horizontal" method="post" action="{{ route('login.auth') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter username">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                    </div>





                                    <div class="mt-4 text-center">
                                        <a href="auth-recoverpw.html" class="text-muted"><i class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
