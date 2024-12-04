<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ticket de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .summary {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Ticket de Compra</h2>
        <p>Fecha: {{ now()->format('d/m/Y') }}</p>
    </div>

    <h3>Productos:</h3>
    <ul>
        @foreach($carritoItems as $item)
        <li>{{ $item->articulo->Nom_articulo }} - {{ $item->articulo->descripcion }} - 
            ${{ number_format($item->articulo->precio, 2) }}
        </li>
        @endforeach
    </ul>

    <div class="summary">
        <p><strong>Total productos:</strong> ${{ number_format($totalProductos, 2) }}</p>
        <p><strong>Envío:</strong> ${{ number_format($costoEnvio, 2) }}</p>
        <p><strong>Descuentos:</strong> ${{ number_format($descuentos, 2) }}</p>
        <hr>
        <p><strong>Total:</strong> ${{ number_format($total, 2) }}</p>
    </div>
</body>
</html>
