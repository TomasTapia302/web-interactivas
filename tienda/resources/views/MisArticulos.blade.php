@extends('layouts.app')

@section('content')
<div class="container">
<div class="row"> 
  <div class="col-3"> 
    <div class="text-bg-primary p-3 rounded"><h2>Filtros</h2></div>
 
    <br>
    <div class="border border-black border-opacity-50 rounded">
      <form method="GET" action="{{ route('MisArticulos') }}">
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="hombres" id="hombres" {{ request('hombres') ? 'checked' : '' }}>
            <label class="form-check-label" for="hombres">Hombres</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="mujeres" id="mujeres" {{ request('mujeres') ? 'checked' : '' }}>
            <label class="form-check-label" for="mujeres">Mujeres</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="niños" id="niños" {{ request('niños') ? 'checked' : '' }}>
            <label class="form-check-label" for="niños">Niños</label>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-primary" type="submit">Buscar</button>
         
        </div>
    </form>
  </div>
    <br>
   </div>
    <div class="col-8" >
      <div class="text-bg-primary p-3 rounded "> <h2>Mis Articulos</h2> </div>
   <br>
   @foreach($articulos as $articulo)
        @if ($articulo->id_vendedor === auth()->id()) {{-- Comparación estricta --}}
        <div class="card mb-3 border border-black border-opacity-50 rounded">
            <div class="col text-bg-success text-center">
                <h2>Disponible</h2>
            </div>
            <div class="row text-center">
                <div class="col">
                    <img src="{{ $articulo->url_imagen }}" alt="{{ $articulo->Nom_articulo }}" class="img-fluid rounded-start">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h3 class="card-title">{{ $articulo->Nom_articulo }}</h3>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-secondary">Editar</a>

                            <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este artículo?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endforeach
</div>

    </div>
    
  </div>
</div>
@endsection
@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush