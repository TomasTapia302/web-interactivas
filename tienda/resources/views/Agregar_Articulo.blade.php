@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Agregar Artículo</h1>
        <form action="/agregar-articulo" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Artículo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
            </div>
            <div class="form-group">
                <label for="inventario">Inventario</label>
                <input type="number" class="form-control" id="inventario" name="inventario" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="Hombres">Hombres</option>
                    <option value="Mujeres">Mujeres</option>
                    <option value="Niños">Niños</option>
                    <option value="Accesorios">Accesorios</option>
                </select>
            </div>
            <div class="form-group">
                <label for="id_vendedor">ID del Vendedor</label>
                <input type="number" class="form-control" id="id_vendedor" name="id_vendedor" required>
            </div>
            <div class="form-group">
                <label for="url_imagen">URL de la Imagen</label>
                <input type="url" class="form-control" id="url_imagen" name="url_imagen" required>
            </div>
            <button type="submit" class="btn btn-success">Agregar Artículo</button>
            <a href="/home" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush
