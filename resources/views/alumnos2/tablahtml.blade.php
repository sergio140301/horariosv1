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
        <h1 class="custom-title">¡Bienvenido a la página de alumnos!</h1>
    </div>
    <div class="container mt-12 text-center">
        <a href="{{ route('alumnos.create') }}">
            <img src="{{ asset('img/icono-nuevo.png') }}" width="50px">
        </a>
           
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">No. de Control</th> <!-- Nuevo campo -->
                    <th scope="col">Nombre Alumno</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th> <!-- Nuevo campo -->
                    <th scope="col">Sexo</th> <!-- Nuevo campo -->
                    <th scope="col">Email</th>
                    <th scope="col">Carrera</th> <!-- Nuevo campo -->
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td scope="row">{{ $alumno->id }}</td>
                        <td>{{ $alumno->noctrl }}</td> <!-- Nuevo campo -->
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->apellidop }}</td>
                        <td>{{ $alumno->apellidom }}</td> <!-- Nuevo campo -->
                        <td>{{ $alumno->sexo }}</td> <!-- Nuevo campo -->
                        <td>{{ $alumno->email }}</td>
                        <td>{{ $alumno->carrera->nombreCarrera ?? 'Sin Carrera' }}</td>
                        <td>{{ $alumno->created_at }}</td>
                        <td>{{ $alumno->updated_at }}</td>
                        <td><a href="{{ route('alumnos.show', $alumno->id) }}"><img src="{{ asset('img/icono-ver.png') }}" width="50px"></a></td>
                        <td><a href="{{ route('alumnos.eliminar', $alumno->id) }}"><img src="{{ asset('img/icono-delete.png') }}" width="50px"></a></td>
                        <td><a href="{{ route('alumnos.edit', $alumno->id) }}"><img src="{{ asset('img/icono-editar.png') }}" width="50px"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Botones de paginación --}}
        {{ $alumnos->links() }}
    </div>
</div>
