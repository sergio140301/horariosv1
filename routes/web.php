<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeptoController;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\ProfileController;

//RUTA DE ALUMNOS + AUTH
Route::middleware('auth')->group(function () {
    Route::resource('alumnos', AlumnoController::class);
    Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');

    Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
    Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');

    Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
    Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
    Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');


    Route::get('/alumnos/eliminar/{alumno}', [AlumnoController::class, 'eliminar'])->name('alumnos.eliminar');
    Route::delete('/alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');


});

// RUTA DE DEPARTAMENTOS + AUTH
Route::middleware('auth')->group(function () {

    Route::resource('deptos', DeptoController::class);
    Route::get('/deptos.index', [DeptoController::class, 'index'])->name('deptos.index');

    Route::get('/deptos.create', [DeptoController::class, 'create'])->name('deptos.create');
    Route::post('/deptos.store', [DeptoController::class, 'store'])->name('deptos.store');

    Route::get('/deptos.show/{depto}', [DeptoController::class, 'show'])->name('deptos.show');
    Route::get('/deptos.edit/{depto}', [DeptoController::class, 'edit'])->name('deptos.edit');
    Route::post('/deptos.update/{depto}', [DeptoController::class, 'update'])->name('deptos.update');

    Route::get('/deptos/eliminar/{depto}', [DeptoController::class, 'eliminar'])->name('deptos.eliminar');
    Route::delete('/deptos/{depto}', [DeptoController::class, 'destroy'])->name('deptos.destroy');
});

// RUTA DE CARRERAS + AUTH
Route::middleware('auth')->group(function () {

    Route::resource('carreras', CarreraController::class);
    
    Route::get('/carreras.index', [CarreraController::class, 'index'])->name('carreras.index');

    Route::get('/carreras.create', [CarreraController::class, 'create'])->name('carreras.create');
    Route::post('/carreras.store', [CarreraController::class, 'store'])->name('carreras.store');

    Route::get('/carreras.show/{carrera}', [CarreraController::class, 'show'])->name('carreras.show');
    Route::get('/carreras.edit/{carrera}', [CarreraController::class, 'edit'])->name('carreras.edit');
    Route::post('/carreras.update/{carrera}', [CarreraController::class, 'update'])->name('carreras.update');

    Route::get('/carreras/eliminar/{carrera}', [CarreraController::class, 'eliminar'])->name('carreras.eliminar');
    Route::delete('/carreras/{carrera}', [CarreraController::class, 'destroy'])->name('carreras.destroy');
});


//RUTA DE PUESTOS + AUTH 
Route::middleware('auth')->group(function () {
    Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');

    Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
    Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');

    Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
    Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
    Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');

    Route::get('/puestos/eliminar/{puesto}', [PuestoController::class, 'eliminar'])->name('puestos.eliminar');
    Route::delete('/puestos/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
    Route::post('/puestos/destroy/{puesto}', [PuestoController::class, 'destroy'])->name('puestos.destroy');
});

//RUTA DE PLAZAS + AUTH
Route::middleware('auth')->group(function () {
    Route::get('/plazas.index', [PlazaController::class, 'index'])->name('plazas.index');

    Route::get('/plazas.create', [PlazaController::class, 'create'])->name('plazas.create');
    Route::post('/plazas.store', [PlazaController::class, 'store'])->name('plazas.store');

    Route::get('/plazas.show/{plaza}', [PlazaController::class, 'show'])->name('plazas.show');
    Route::get('/plazas.edit/{plaza}', [PlazaController::class, 'edit'])->name('plazas.edit');
    Route::post('/plazas.update/{plaza}', [PlazaController::class, 'update'])->name('plazas.update');

    Route::get('/plazas.eliminar/{plaza}', [PlazaController::class, 'eliminar'])->name('plazas.eliminar');
    Route::delete('/plazas.destroy/{plaza}', [PlazaController::class, 'destroy'])->name('plazas.destroy');



});



Route::get('/inicio/{carrera?}', function (string $carrera = "sin carrera") {
    return view('inicio', ['carrera' => $carrera]);
});

Route::get('/catalogos', function () {
    return view('catalogos');
})->middleware("auth")->name("catalogos");


Route::get('/alumnos', function () {
    return view('alumnos');
})->middleware("auth")->name("alumnos");

Route::get('/maestros', function () {
    return view('maestros');
})->middleware("auth")->name("maestros");

Route::get('/deptos', function () {
    return view('deptos');
})->middleware("auth")->name("deptos");

Route::get('/materias', function () {
    return view('materias');
})->middleware("auth")->name("materias");


Route::get('/reticulas', function () {
    return view('reticulas');
})->middleware("auth")->name("reticulas");


Route::get('/carreras', function () {
    return view('carreras');
})->middleware("auth")->name("carreras");



Route::get('/inicio', function () {
    return view('inicio');
})->middleware("auth")->name("inicio");




Route::get('/', function () {
    //return view('welcome');
    return view('inicio');
})->name("inicio");

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
