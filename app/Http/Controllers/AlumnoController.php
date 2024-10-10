<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    // Propiedad para un arreglo.
    public $validado;

    public function __construct()
    {
        $this->validado = [
            'noctrl' => 'required|string|max:255|unique:alumnos,noctrl',
            'nombre' => 'required|string|max:255',
            'apellidop' => 'required|string|max:255',
            'apellidom' => 'required|string|max:255',
            'sexo' => 'required|in:M,F',
            'email' => 'required|email|unique:alumnos,email',
            'carrera_id' => 'required|exists:carreras,id',
        ];
    }

    public function index()
    {

        $alumnos = Alumno::with('carrera')->paginate(5);
        return view("alumnos2/index", compact("alumnos"));
    }

    public function create()
    {
        $carreras = \App\Models\Carrera::all(); // Obtener todas las carreras
        $alumnos = Alumno::Paginate(5);
        $alumno = new Alumno;
        $desabilitado = "";
        $accion = "crear";
        $txtbtn = "guardar";
        return view("alumnos2/frm", compact("alumnos", "alumno", "accion", "txtbtn", 'desabilitado', 'carreras'));

    }
    public function store(Request $request)
    {
        //VALIDAR DATOS + CONSTRUCTOR
        $validado = $request->validate($this->validado);
        Alumno::create($validado);

        // Alumno::create($request()->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno created sucessfully.');
        ;

    }

    public function show(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        $carreras = \App\Models\Carrera::all(); // Obtener todas las carreras
        $accion = "actualizar";
        $txtbtn = "Eliminar Datos";
        $desabilitado = "disabled";
    
        return view('alumnos2.frm', compact('alumnos', 'alumno', 'carreras', 'accion', 'txtbtn', 'desabilitado'));
    }
    

    public function edit(Alumno $alumno)
    {
        $alumnos = Alumno::paginate(5);
        $carreras = \App\Models\Carrera::all(); // Obtener todas las carreras
        $accion = "actualizar";
        $txtbtn = "Actualizar Datos";
        $desabilitado = "";
    
        return view("alumnos2.frm", compact('alumnos', 'alumno', 'carreras', 'accion', 'txtbtn', 'desabilitado'));
    }
    



    public function update(Request $request, Alumno $alumno)
    {
        // Validar datos
        $validado = $request->validate($this->validado);
        
        // Actualizar el alumno
        $alumno->update($validado);
        
        // Redirigir con éxito y pasar la variable de carreras si necesitas
        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado exitosamente.');
    }


    public function eliminar(Alumno $alumno)
    {
        $alumnos = Alumno::Paginate(5);
        return view('alumnos2.eliminar', compact('alumnos', 'alumno'));

    }


    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('success', 'Alumno deleted sucessfully.');

    }
}
