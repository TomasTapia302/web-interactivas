<?php

namespace App\Http\Controllers;

use App\Models\ordenes;
use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\articulos;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;



class OrdenesController extends Controller
{


    
    public function crearOrden(Request $request)
    {
        $user = Auth::user();

        // Obtener los artículos del carrito del usuario autenticado
        $carritoItems = Carrito::where('id_user', $user->id)->get();

        if ($carritoItems->isEmpty()) {
            return redirect()->route('carrito.index')->with('error', 'El carrito está vacío.');
        }

        // Calcular el precio total
        $precioTotal = $carritoItems->sum(function ($item) {
            return $item->cantidad * $item->precio;
        });

        // Crear una nueva orden
        $orden = Ordenes::create([
            'vendedor' => 1, // Si tienes vendedores, agrega la lógica para asignarles.
            'comprador' => $user->id,
            'precio_total' => $precioTotal,
            'estado' => 1, // 1 = pendiente, puedes usar constantes para los estados.
        ]);

        // Registrar los detalles de la orden (si es necesario)
        foreach ($carritoItems as $item) {
            $orden->detalles()->create([
                'articulo_id' => $item->id_articulo,
                'cantidad' => $item->cantidad,
                'precio' => $item->precio,
            ]);

            // Opcional: Actualizar inventario
            $articulo = Articulos::find($item->id_articulo);
            if ($articulo) {
                $articulo->inventario -= $item->cantidad;
                $articulo->save();
            }
        }

        // Vaciar el carrito
        Carrito::where('id_user', $user->id)->delete();

        return redirect()->route('carrito.index')->with('success', 'Compra realizada con éxito.');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $orden = Ordenes::with('detalles.producto')->findOrFail($id);
        return view('ordenes.show', compact('orden'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ordenes $ordenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ordenes $ordenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ordenes $ordenes)
    {
        //
    }
}
