<style>
    .custom-title {
        color: #343a40; 
        font-weight: bold; 
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); 
    }
  </style>
  <div class="container text-center mt-5 text-center">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <h1 class="custom-title">¡Bienvenido a la pagina de plazas!</h1>
  </div>
  
  <div class="table-responsive-md text-center">
    <a href="{{ route('plazas.create')}}"> <img src=" {{ asset('img\icono-nuevo.png') }}" width="50px">  </a>
    <table class="table table-primary">
      <thead>
        <tr>
          <th scope="col"># Plaza</th>
          <th scope="col">ID Plaza</th>
          <th scope="col">Nombre Plaza</th>
          <th scope="col">Creado</th>
          <th scope="col">Actualizado</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
         
        </tr>
      </thead>
      <tbody>
        @foreach ($plazas as $plaza)
        <tr class="">
          <td scope="row">{{ $plaza->id }}</td>
          <td scope="row">{{ $plaza->idplaza }}</td>
          <td>{{ $plaza->nombreplaza }}</td>
          <td>{{ $plaza->created_at }}</td>
          <td>{{ $plaza->updated_at }}</td>
          <td><a href=" {{ route('plazas.show', $plaza->id)}}"> <img src=" {{ asset('img\icono-ver.png') }}" width="50px">  </a></td>
          <td><a href="{{ route('plazas.eliminar', $plaza->id)}}"> <img src=" {{ asset('img\icono-delete.png') }}" width="50px">  </a></td>
          <td><a href="{{ route('plazas.edit', $plaza->id)}}"> <img src=" {{ asset('img\icono-editar.png') }}" width="50px">  </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $plazas->links() }}
  </div>
  