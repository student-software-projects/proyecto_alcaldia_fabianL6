<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadController extends Controller
{
//GET
    public function index(){
        $localidades=Localidad::all();
        return view('localidad.index',compact('localidades'));
    }

    //GET
    public function create(){
        return view('localidad.create');
    }

    public function store(Request $request){

        Localidad::create($request->all());
        return redirect()->route('localidad.index');
    }

    public function destroy($id){
        // SELECT * FROM entidad WHERE ID = ?
        // TRUE = DELETE FROM ENTIDAD WHERE ID = ?
        Localidad::find($id)->delete();
        return redirect()->route('localidad.index');
    }

    public function edit($id){
        $localidad = Localidad::findOrFail($id);
        return view('localidad.edit', compact('localidad'));
    }

    public function update(Request $request, $id){
        $datosexception = request()->except(['_token', '_method']);
        Localidad::where('id', '=', $id)->update($datosexception);
        return redirect()->route('localidad.index');
    }

    public function show($id){
        $localidad = Localidad::find($id);
        return view('localidad.show', compact('localidad'));
    }
}
