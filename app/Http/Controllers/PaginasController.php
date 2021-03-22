<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PaginasController extends Controller
{
    public function inicio()
    {
        return view('template');
    }
    public function nota()
    {
        $nota = App\Models\Nota::all();
        return view('notas', compact('nota'));
    }

    public function detalle($id)
    {
        $nota = App\Models\Nota::findOrFail($id);
        return view('nota.detalle', compact('nota'));
    }

    public function crear(Request $request)
    {
        //return $request->all();
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        $nuevaNota = new App\Models\Nota;
        $nuevaNota->nombre = $request->nombre;
        $nuevaNota->descripcion = $request->descripcion;
        $nuevaNota->save();
        return back()->with('mensaje', 'Nota agrgada');
    }

    public function foto()
    {
        return view('foto');
    }

    public function blog()
    {
        return view('blog');
    }

    public function nosotros($nombre = null)
    {
        $equipo = ['Heiberg', 'Thais', 'Donhis'];
        return view('nosotros', compact('equipo', 'nombre'));
    }
}
