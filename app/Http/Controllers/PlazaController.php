<?php

namespace App\Http\Controllers;

use App\Models\Plaza;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plazas = Plaza::paginate(5);

        return view("plazas/index", compact("plazas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plazas = Plaza::Paginate(5);
        return view("plazas.create", compact("plazas"));
    }

    public function store(Request $request)
    {
        Plaza::create([
            'idplaza' => $request->idplaza,
            'nombreplaza' => $request->nombreplaza,
        ]);
        return redirect()->route('plazas.index')->with('success', 'Alumno created sucessfully.');
        ;
    }

 
    public function show(Plaza $plaza)
    {
        $plazas = Plaza::Paginate(5);
        return view("plazas/show", compact('plazas','plaza'));
    }

    public function edit(Plaza $plaza)
    {
        $plazas = Plaza::Paginate(5);
        return view("plazas/edit", compact("plazas",'plaza'));
    }


    public function update(Request $request, Plaza $plaza)
    {
        $plaza->update($request->all());
        return redirect()->route('plazas.index')->with('success', 'plaza updated sucessfully.');
    }

    public function eliminar(Plaza $plaza)
    {
        $plazas = Plaza::Paginate(5);
        return view('plazas.eliminar', compact('plazas', 'plaza'));

    }

    public function destroy(Plaza $plaza)
    {
        $plaza->delete();
        return redirect()->route('plazas.index')->with('success', 'plaza elimnada correctamente');
    }
}
