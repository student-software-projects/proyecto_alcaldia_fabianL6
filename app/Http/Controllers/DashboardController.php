<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('modules.dashboard.index');

    }

    public function perfil()
    {
        $usuario = User::find(session('USER')->id);
        return view('modules.dashboard.perfil', compact('usuario')) ;

    }


}
