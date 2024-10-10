<style>
    .custom-title {
        color: #343a40;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="container mt-5">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container text-center mt-5">
        <h1 class="custom-title">¡Bienvenido a la página de carreras!</h1>
    </div>
    
    <div class="container mt-12 text-center">
        <a href="{{ route('carreras.create') }}">
            <img src="{{ asset('img/icono-nuevo.png') }}" width="50px">
        </a>

        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID Carrera</th>
                    <th scope="col">Nombre Carrera</th>
                    <th scope="col">Nombre Mediano</th>
                    <th scope="col">Nombre Corto</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carreras as $carrera)
                    <tr>
                        <td scope="row">{{ $carrera->idCarrera }}</td>
                        <td>{{ $carrera->nombreCarrera }}</td>
                        <td>{{ $carrera->nombreMediano }}</td>
                        <td>{{ $carrera->nombreCorto }}</td>
                        <td>{{ $carrera->depto->idDepto ?? 'Sin Departamento' }}</td>
                        <td>{{ $carrera->created_at }}</td>
                        <td>{{ $carrera->updated_at }}</td>
                        <td><a href="{{ route('carreras.show', $carrera->idCarrera) }}"><img src="{{ asset('img/icono-ver.png') }}" width="50px"></a></td>
                        <td><a href="{{ route('carreras.eliminar', $carrera->idCarrera) }}"><img src="{{ asset('img/icono-delete.png') }}" width="50px"></a></td>
                        <td><a href="{{ route('carreras.edit', $carrera->idCarrera) }}"><img src="{{ asset('img/icono-editar.png') }}" width="50px"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Botones de paginación --}}
        {{ $carreras->links() }}
    </div>
</div>
