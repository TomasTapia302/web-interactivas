@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">Artículos de Accesorios</h1>
        <div class="row">
            @foreach($articulos as $articulo)
                <div class="col-md-2">
                    <div class="card">
                        <img src="{{ $articulo->url_imagen }}" alt="{{ $articulo->nombre }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $articulo->nombre }}</h5>
                            <p class="card-text">Precio: ${{ $articulo->precio }}</p>
                            <p class="card-text">Inventario: {{ $articulo->inventario }}</p>
                        </div>
                    </div>
                </div>
                @if ($loop->iteration % 5 == 0)
                    </div><div class="row">
                @endif
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .card {
            margin: 10px;
        }
        .card img {
            width: 100%;
            height: auto;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
