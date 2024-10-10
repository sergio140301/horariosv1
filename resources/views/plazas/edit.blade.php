@extends('inicio2')

@section('contenido1')
    @include('plazas.tablahtml')
@endsection

@section('contenido2')
<div class="card-header">
    <h4 class="mb-0">Actualizar datos Plazas</h4>
</div>
    <form method="POST" action="{{ route('plazas.update', $plaza->id)}}">
        @csrf
        <div class="mb-3">
            <label for="idplaza" class="form-label">ID Plaza</label>
            <input type="text"  name="idplaza" class="form-control" id=""
            value="{{$plaza->idplaza}}"   aria-describedby="Nombre">
            <div id="" class="form-text">Escribe el id plaza 3 letras y 4 numeros</div>
        </div>
        <div class="mb-3">
            <label for="nombreplaza" class="form-label">Nombre Plaza</label>
            <input type="text" name="nombreplaza" class="form-control" 
            value="{{$plaza->nombreplaza}}"  id="" aria-describedby="Nombre">
            <div id="" class="form-text">nombre del la plaza</div>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('plazas.index')}}" class="btn btn-primary">Regresar</a>
    </form>
@endsection

