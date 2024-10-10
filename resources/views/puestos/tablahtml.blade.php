<style>
    .custom-title {
        color: #343a40;
        font-weight: bold;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }
</style>
<div class="container text-center mt-5 text-center">
    <a href="{{ route('puestos.create') }}"> <img src=" {{ asset('img\icono-nuevo.png') }}" width="50px"> </a>
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="custom-title">¡Bienvenido a la pagina puestos!</h1>
    </div>

    <div class="table-responsive-md">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Puesto</th>
                    <th scope="col">tipo</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Actualizado</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                @foreach ($puestos as $puesto)
                    <tr class="">
                        <td scope="row">{{ $puesto->id }}</td>
                        <td>{{ $puesto->nombrepuesto }}</td>
                        <td>{{ $puesto->tipo }}</td>
                        <td>{{ $puesto->created_at }}</td>
                        <td>{{ $puesto->updated_at }}</td>
                        {{-- Boton para ver detalles todos son get por ser ancord --}}
                        <td><a href="{{ route('puestos.show', $puesto->id) }}"> <img src=" {{ asset('img\icono-ver.png') }}" width="50px"> </a></td>
                        <td><a href="{{ route('puestos.eliminar', $puesto->id) }}"> <img src=" {{ asset('img\icono-delete.png') }}" width="50px"> </a></td>
                        <td><a href="{{ route('puestos.edit', $puesto->id) }}"> <img src=" {{ asset('img\icono-editar.png') }}"  width="50px"> </a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $puestos->links() }}
    </div>
