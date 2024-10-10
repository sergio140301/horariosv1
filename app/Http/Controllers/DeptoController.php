<?php

namespace App\Http\Controllers;

use App\Models\Depto;
use Illuminate\Http\Request;

class DeptoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Depto::paginate(5);  // Cambia esto según tu modelo
        return view("deptos.index", compact("departamentos"));  // Asegúrate de que la vista esté correctamente referenciada
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = Depto::paginate(5);
        $depto = new Depto(); 
        $desabilitado = ""; 
        $accion = "crear"; 
        $txtbtn = "guardar"; 
    
        return view("deptos.frm", compact("departamentos", "depto", "desabilitado", "txtbtn", "accion"));
    }
    

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'idDepto' => 'required|string|max:10',
            'nombreDepto' => 'required|string|max:255',
            'nombreMediano' => 'nullable|string|max:255',
            'nombreCorto' => 'nullable|string|max:50',
            // Agrega otras validaciones necesarias aquí
        ]);
    
        // Crear el departamento con los datos validados
        Depto::create($validatedData);
    
        return redirect()->route('deptos.index')->with('success', 'Departamento creado con éxito');
    }
    

    public function show(Depto $depto)
    {
        $departamentos = Depto::paginate(5);
        $accion = "actualizar";
        $txtbtn = "Eliminar Datos";
        $desabilitado = "disabled";
        return view('deptos.frm', compact('departamentos', "depto" ,'accion', 'txtbtn', 'desabilitado'));
    }

public function edit(Depto $depto)
{
    $departamentos = Depto::paginate(5);
    $accion = "actualizar";
    $txtbtn = "Actualizar Datos";
    $desabilitado = "";
    return view('deptos.frm', compact('departamentos', 'depto', 'accion', 'desabilitado', 'txtbtn'));
}

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Depto $depto)
    {
        // Validar los datos entrantes
        $validando = $request->validate([
            'idDepto' => 'required|string|max:10',
            'nombreDepto' => 'required|string|max:255',
            'nombreMediano' => 'nullable|string|max:255',
            'nombreCorto' => 'nullable|string|max:10',
        ]);
    
        // Actualizar el departamento
        $depto->update($validando);
    
        return redirect()->route('deptos.index')->with('success', 'Departamento modificado exitosamente.');
    }
    
    public function eliminar(Depto $depto)
    {
        $departamentos = Depto::paginate(5);
        return view('deptos.eliminar', compact('departamentos', "depto"));
    }

    public function destroy(Depto $depto)
    {
        $depto->delete();
        return redirect()->route('deptos.index')->with('success', 'Departamento eliminado exitosamente.');
    }
}
