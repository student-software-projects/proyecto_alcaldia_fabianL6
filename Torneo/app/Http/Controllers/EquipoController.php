<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Localidad;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index(){
        $equipos=Equipo::all();
        return view('equipo.index',compact('equipos'));
    }
    //GET
    public function create(){
        $localidades=Localidad::all();
        return view('equipo.create',compact('localidades'));
    }
    public function store(Request $request){
        Equipo::create($request->all());
        return redirect()->route('equipo.index');
    }

    public function destroy($id){
        Equipo::find($id)->delete();
        return redirect()->route('equipo.index');
    }

    public function edit($id){
        $equipos = Equipo::findOrFail($id);
        $localidades = Localidad::all();
        return view('equipo.edit', compact('equipos', 'localidades'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Equipo::where('id', '=', $id)->update($datosexception);

        return redirect()->route('equipo.index');

    }

    public function show($id){
        $equipos = Equipo::find($id);
        $localidades = Localidad::all();
        return view('equipo.show', compact('equipos','localidades'));
    }
}
