@extends('inicio2')

@section('contenido1')
    @include('puestos/tablahtml')
@endsection

@section('contenido2')
    <form method="POST" action="{{route('puestos.store')}}">
        @csrf
        <div class="mb-3">
            <label for="idpuesto" class="form-label">ID PUESTO / NUM CONTROL</label>
            <input type="text" name="idpuesto" class="form-control" id="" aria-describedby="Nombre" required>
            <div id="" class="form-text">Escribe el num control con 2 letras y 4 numeros</div>
        <div class="mb-3">
            <label for="nombrepuesto" class="form-label">Nombre Puesto</label>
            <input type="text" name="nombrepuesto" class="form-control" id="" aria-describedby="Nombre" required>
            <div id="" class="form-text">Escribe el nombre del puesto</div>
        </div>
        <div class="mb-3">
            <label for="tipo">Tipo</label>
            <select class="form-select" name="tipo" aria-label="Default select example" required>
                <option selected>Selecciona el tipo puesto</option>
                <option value="director">Director</option>
                <option value="docente">Docente</option>
                <option value="administrativo">Administrativo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
