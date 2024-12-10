@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Carousel -->
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://marketplace.canva.com/EAFioSHFIn0/1/0/1600w/canva-banner-horizontal-rebajas-para-tienda-moderno-vibrante-negro-y-blanco-r7Jpw7G5SAQ.jpg" class="d-block w-100" alt="Banner 1">
                </div>
                <div class="carousel-item">
                    <img src="https://marketplace.canva.com/EAFcLFDpKrs/2/0/1600w/canva-banner-compacto-ofertas-y-descuentos-r%C3%BAstico-verde-fdQ42wY7w4Y.jpg" class="d-block w-100" alt="Banner 2">
                </div>
                <div class="carousel-item">
                    <img src="https://marketplace.canva.com/EAEjszx9ukI/1/0/1600w/canva-panel-de-twitch-amarillo-y-negro-papel-maximalista-G67eDPmOHwA.jpg" class="d-block w-100" alt="Banner 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Artículos -->
        <h1 class="text-center my-4 title-stylish">INICIO</h1>
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
                            <form action="{{ route('carrito.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id_articulo" value="{{ $articulo->id }}">
                                <div class="form-group">
                                    <label for="cantidad_{{ $articulo->id }}">Cantidad:</label>
                                    <input type="number" name="cantidad" id="cantidad_{{ $articulo->id }}" class="form-control" min="1" max="{{ $articulo->inventario }}" required>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Agregar al Carrito</button>
                            </form>
                           
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 4 == 0)
                    </div><div class="row">
                @endif
            @endforeach
        </div>
    </div>

    <!-- Estilos -->
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
            font-size: 1.25rem;  
            font-weight: bold;   
        }
        .card-body {
            text-align: center;
        }
        .title-stylish {
            font-family: 'Oswald', sans-serif;  
            font-size: 3rem;  
            font-weight: bold;  
            text-transform: uppercase;  
        }
    </style>

    <!-- Scripts -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
