@extends('inicio2')

@section('contenido1')
    @include('deptos.tablahtml')  <!-- Cambié la ruta a la tabla de departamentos -->
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
                    action=" @if ($accion == 'crear')
                            {{ route('deptos.store') }}
                        @else
                            {{ route('deptos.update', $depto->id) }}
                        @endif">
                
                    @csrf
                    @if ($accion == 'eliminar')
                        @method('DELETE') 
                    @endif
               
                
        
                        <div class="mb-3">
                            <label for="idDepto" class="form-label">ID Depto</label>
                            <input type="text" name="idDepto" class="form-control" id="idDepto" maxlength="2"
                                value="{{ old('idDepto', $depto->idDepto ?? '') }}" {{$desabilitado}}>
                            @error('idDepto')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el ID Depto {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el ID del departamento *2 numeros*</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreDepto" class="form-label">Nombre del Departamento</label>
                            <input type="text" name="nombreDepto" class="form-control" id="nombreDepto"
                                value="{{ old('nombreDepto', $depto->nombreDepto) }}" {{$desabilitado}}>
                            @error('nombreDepto')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el nombre del departamento {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre del departamento</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreMediano" class="form-label">Nombre Mediano</label>
                            <input type="text" name="nombreMediano" class="form-control" id="nombreMediano" maxlength="4"
                                value="{{ old('nombreMediano', $depto->nombreMediano ?? '') }}" {{$desabilitado}}>
                            @error('nombreMediano')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el nombre mediano {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre mediano Maximo 4 letras</div>
                        </div>

                        <div class="mb-3">
                            <label for="nombreCorto" class="form-label">Nombre Corto</label>
                            <input type="text" name="nombreCorto" class="form-control" id="nombreCorto" maxlength="3"
                                value="{{ old('nombreCorto', $depto->nombreCorto ?? '') }}" {{$desabilitado}}>
                            @error('nombreCorto')
                                <ul class="list-unstyled text-danger">
                                    <p>error en el nombre corto {{ $message }}</p>
                                </ul>
                            @enderror
                            <div class="form-text">Escribe el nombre corto minimo 3</div>
                        </div>

                        <div class="mb-3">
                            <label for="created_at" class="form-label">Creado</label>
                            <input type="text" name="created_at" class="form-control" id="created_at"
                                value="{{ old('created_at', $depto->created_at) }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="updated_at" class="form-label">Actualizado</label>
                            <input type="text" name="updated_at" class="form-control" id="updated_at"
                                value="{{ old('updated_at', $depto->updated_at) }}" disabled>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ $txtbtn }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
