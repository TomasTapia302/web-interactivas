@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4 title-stylish">Artículos para Mujeres</h1>
        <div class="row">
            @foreach($articulos as $articulo)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-img-wrapper">
                            <img src="{{ $articulo->url_imagen }}" alt="{{ $articulo->Nom_articulo }}" class="card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $articulo->Nom_articulo }}</h5>
                            <p class="card-text">Precio: ${{ $articulo->precio }}</p>
                            <p class="card-text">Inventario: {{ $articulo->inventario }}</p>
                            <a href="#" class="btn btn-success btn-block">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 4 == 0)
                    </div><div class="row">
                @endif
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');
        
        .card {
            margin: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;  /* Esquinas redondeadas para las tarjetas */
        }
        .card-img-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
        }
        .card img {
            width: 90%;  /* Imagen más grande */
            height: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-title {
            font-size: 1.25rem;  /* Letra más grande para el nombre del artículo */
            font-weight: bold;   /* Negrita para el nombre del artículo */
        }
        .card-body {
            text-align: center;
        }
        .title-stylish {
            font-family: 'Oswald', sans-serif;  /* Tipografía sans-serif similar a Impact */
            font-size: 3rem;  /* Tamaño de letra más grande */
            font-weight: bold;  /* Negrita */
            text-transform: uppercase;  /* Mayúsculas */
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
