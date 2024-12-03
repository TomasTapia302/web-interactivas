@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="{{ $articulo->url_imagen }}" alt="{{ $articulo->nombre }}" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title">{{ $articulo->nombre }}</h2>
                        <p class="card-text"><strong>Descripción:</strong> {{ $articulo->descripcion }}</p>
                        <p class="card-text"><strong>Precio:</strong> ${{ $articulo->precio }}</p>
                        <p class="card-text"><strong>Inventario:</strong> {{ $articulo->inventario }}</p>
                        <p class="card-text"><strong>Tipo:</strong> {{ $articulo->tipo }}</p>
                        <p class="card-text"><strong>ID del Vendedor:</strong> {{ $articulo->id_vendedor }}</p>
                        <form action="/articulo/{{ $articulo->id }}/agregar-carrito" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Agregar al Carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush
