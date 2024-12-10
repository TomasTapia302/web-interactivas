@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Editar Artículo</h1>
        <form action="{{ route('articulos.update', $articulo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Nom_articulo">Nombre del Artículo</label>
                <input type="text" class="form-control" id="Nom_articulo" name="Nom_articulo" value="{{ $articulo->Nom_articulo }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ $articulo->descripcion }}</textarea>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $articulo->precio }}" required>
            </div>

            <div class="form-group">
                <label for="inventario">Inventario</label>
                <input type="number" class="form-control" id="inventario" name="inventario" value="{{ $articulo->inventario }}" required>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="Hombres" {{ $articulo->tipo === 'Hombres' ? 'selected' : '' }}>Hombres</option>
                    <option value="Mujeres" {{ $articulo->tipo === 'Mujeres' ? 'selected' : '' }}>Mujeres</option>
                    <option value="Niños" {{ $articulo->tipo === 'Niños' ? 'selected' : '' }}>Niños</option>
                    <option value="Accesorios" {{ $articulo->tipo === 'Accesorios' ? 'selected' : '' }}>Accesorios</option>
                </select>
            </div>

            <div class="form-group">
                <label for="url_imagen">URL de la Imagen</label>
                <input type="url" class="form-control" id="url_imagen" name="url_imagen" value="{{ $articulo->url_imagen }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Artículo</button>
            <a href="{{ route('MisArticulos') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@endsection
