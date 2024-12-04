@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4 title-stylish">Artículos para Hombres</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
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
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');
        
        .card {
            margin: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .card-img-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
        }
        .card img {
            width: 90%;
            height: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
