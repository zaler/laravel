<?php

namespace App\Http\Controllers;

use App\Models\proyecto;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index():Renderable
    {
        $proyecto = proyecto::paginate(1);
        return view('proyecto.index', compact('proyecto'));
    }

    public function create():Renderable
    {
        $proyecto = new Proyecto;
        $title =__('Crear Proyecto');
        $action = route('proyecto.store');
        $buttonText =__('Crear Proyecto');
        return view('proyecto.form', compact('proyecto','title','action','buttonText'));
    }

    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'nombre_proyecto' => 'required|unique:proyecto,nombre_proyecto|string|max:100',
            'fuente_fondos' => 'required|unique:proyecto,nombre_proyecto|string|max:100'
        ]);

        Proyecto::created([
            'nombre_proyecto'=>$request->string('nombre_proyecto'),
            'fuente_fondos'=>$request->string('fuente_fondos'),
            'monto_planificado'=>$request->decimal('monto_planificado'),
            'monto_patrocinado'=>$request->decimal('monto_patrocinado'), 
            'monto_fondos_propios'=>$request->decimal('monto_fondos_propios')
        ]);
        return redirect()->route('proyecto.index');
    }
}
