<?php

namespace App\Http\Controllers;

use App\Models\Puesto;
use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puestos = Puesto::paginate(5);


        return view("puestos/index", compact("puestos"));
    }

    public function create()
    {
        $puestos = Puesto::paginate(5);
        return view("puestos/create", compact("puestos"));
    }


    public function store(Request $request)
    {
        Puesto::create([
            'idpuesto' => $request->idpuesto,
            'nombrepuesto' => $request->nombrepuesto,
            'tipo' => $request->tipo
        ]);

        // Redirigir o responder
        return redirect()->route('puestos.index')->with('success', 'Puesto creado con éxito');
    }

    public function show(Puesto $puesto)
    {
        $puestos= Puesto::Paginate(5);
        return view('puestos.show', compact('puestos', 'puesto'));
    }


    public function edit(Puesto $puesto)
    {
        $puestos= Puesto::Paginate(5);
        return view('puestos.edit', compact('puestos','puesto'));
    }

  
    public function update(Request $request, Puesto $puesto)
    {
    
        $puesto->update($request->all());
        return redirect()->route('puestos.index')->with('success', 'puesto modificado exitosamente.');
    }


    public function eliminar(Puesto $puesto)
    {
       
        $puestos= Puesto::paginate(5);
        return view('puestos.eliminar', compact('puestos', 'puesto'));
    }
 
    public function destroy(Puesto $puesto)
    {
       
        $puesto->delete();
        return redirect()->route('puestos.index')->with('success', 'Puesto eliminado exitosamente.');
    }
}
