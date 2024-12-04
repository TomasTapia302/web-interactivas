@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Columna del Carrito -->
        <div class="col-lg-8 col-md-12">
            <div class="text-bg-primary p-3 rounded">
                <h2>Carrito</h2>
            </div>
            <br>

            @forelse ($carritoItems as $item)
                <div class="card mb-3 border border-black border-opacity-50 rounded">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ $item->articulo->url_imagen }}" class="img-fluid rounded-start" alt="{{ $item->articulo->nombre }}">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->articulo->nombre }}</h5>
                                <p class="card-text">{{ $item->articulo->descripcion }}</p>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('carrito.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No hay productos en el carrito.</p>
            @endforelse
        </div>

        <!-- Columna del Resumen -->
        <div class="col-lg-4 col-md-12">
            <div class="text-bg-primary p-3 rounded">
                <h2>Resumen de Compra</h2>
            </div>
            <br>
            <div class="border border-black border-opacity-50 rounded p-3">
                <h3>Productos: ${{ number_format($totalProductos, 2) }}</h3>
                <h3>Envío: ${{ number_format($costoEnvio, 2) }}</h3>
                <h3>Descuentos: ${{ number_format($descuentos, 2) }}</h3>
                <hr>
                <h3>Total: ${{ number_format($total, 2) }}</h3>
            </div>
            <br>
            
            <!-- Formulario de pago -->
            <form action="{{ route('carrito.pagar') }}" method="POST">
                @csrf
                <button class="btn btn-primary" type="submit">Pagar</button>
            </form>
            <br>

            <div class="d-grid gap-2">
                <a href="{{ route('carrito.imprimir') }}" class="btn btn-secondary mb-3">Imprimir Ticket</a>
            </div>
        </div>
    </div>
</div>

<!-- Alerta de éxito -->
@if(session('success'))
    <div class="alert alert-success mt-3">
        {{ session('success') }}
    </div>
@endif
@endsection

@push('styles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endpush
