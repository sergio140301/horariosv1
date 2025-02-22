@extends('inicio2')

@section('contenido1')
    @include('carreras.tablahtml')  {{-- Asegúrate de que la ruta sea correcta --}}
@endsection

@section('contenido2')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">
                        @if ($accion == 'crear')
                            Insertando datos nuevos
                        @elseif ($accion == 'actualizar')
                            Actualizando datos
                        @endif
                    </h4>
                </div>

                <div class="card-body">
                    <form method="POST" 
                    action="@if ($accion == 'crear') 
                                {{ route('carreras.store') }} 
                            @else 
                                {{ route('carreras.update', $carrera->idCarrera) }} 
                            @endif">
                    
                        @csrf
                        @if ($accion == 'eliminar')
                            @method('DELETE')
                        @endif

                        <div class="mb-3">
                        <label for="idCarrera" class="form-label">ID Carrera</label>
                            <input type="text" name="idCarrera" class="form-control" maxlength="10" id="idCarrera"
                                value="{{ old('idCarrera', $carrera->idCarrera ?? '') }}" {{$desabilitado}}>
                            @error('idCarrera')
                                <ul class="list-unstyled text-danger">
                                    <p>Error en el ID de Carrera: {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el ID de la Carrera</div>
                        </div> 

                    

                        <div class="mb-3">
                            <label for="nombreCarrera" class="form-label">Nombre de la Carrera</label>
                            <input type="text" name="nombreCarrera" class="form-control" id="nombreCarrera" maxlength="50"
                                value="{{ old('nombreCarrera', $carrera->nombreCarrera) }}" {{$desabilitado}}>
                            @error('nombreCarrera')
                                <ul class="list-unstyled text-danger">
                                    <p>Error en el nombre de la carrera: {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre de la carrera</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreMediano" class="form-label">Nombre Mediano</label>
                            <input type="text" name="nombreMediano" class="form-control" id="nombreMediano" maxlength="7"
                                value="{{ old('nombreMediano', $carrera->nombreMediano ?? '') }}" {{$desabilitado}}>
                            @error('nombreMediano')
                                <ul class="list-unstyled text-danger">
                                    <p>Error en el nombre mediano: {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre mediano de la carrera</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreCorto" class="form-label">Nombre Corto</label>
                            <input type="text" name="nombreCorto" class="form-control" id="nombreCorto" maxlength="5"
                                value="{{ old('nombreCorto', $carrera->nombreCorto ?? '') }}" {{$desabilitado}}>
                            @error('nombreCorto')
                                <ul class="list-unstyled text-danger">
                                    <p>Error en el nombre corto: {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre corto de la carrera</div>
                        </div>

                        <div class="mb-3">
                            <label for="depto_id" class="form-label">Departamento</label>
                            <select name="depto_id" class="form-control" id="depto_id" {{$desabilitado}}>
                                @foreach ($departamentos as $depto)
                                    <option value="{{ $depto->idDepto }}" {{ old('depto_id', $carrera->depto_id ?? '') == $depto->idDepto ? 'selected' : '' }}>
                                        {{ $depto->nombreDepto }}
                                    </option>
                                @endforeach
                            </select>
                            @error('depto_id')
                                <ul class="list-unstyled text-danger">
                                    <p>Error en el departamento: {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Selecciona el departamento de la carrera</div>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
