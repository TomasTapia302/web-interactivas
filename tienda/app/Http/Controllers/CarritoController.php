<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\articulos;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\PDF;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Muestra los artículos en el carrito del usuario.
     */
    public function index()
    {
        $user = Auth::user();
        // Asegúrate de cargar la relación 'articulo' para evitar múltiples consultas
        $carritoItems = Carrito::where('id_user', $user->id)->with('articulo')->get();

        // Calcula el total del carrito
        $totalProductos = $carritoItems->sum('precio');
        $costoEnvio = 50; // Ejemplo de costo de envío
        $descuentos = 10; // Ejemplo de descuentos
        $total = $totalProductos + $costoEnvio - $descuentos;

        return view('carrito', compact('carritoItems', 'totalProductos', 'costoEnvio', 'descuentos', 'total'));
    }

    /**
     * Almacena un nuevo artículo en el carrito.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        // Obtener el artículo
        $articulo = articulos::findOrFail($request->id_articulo);

        // Verificar si el artículo ya está en el carrito del usuario
        $carrito = Carrito::where('id_articulo', $articulo->id)
            ->where('id_user', $user->id)
            ->first();

        if ($carrito) {
            // Incrementar la cantidad si ya existe
            $carrito->cantidad += $request->cantidad;
            $carrito->precio += $articulo->precio * $request->cantidad;
            $carrito->save();
        } else {
            // Agregar un nuevo artículo al carrito
            Carrito::create([
                'id_articulo' => $articulo->id,
                'id_user' => $user->id,
                'cantidad' => $request->cantidad,
                'precio' => $articulo->precio * $request->cantidad,
            ]);
        }

        return redirect()->back()->with('success', 'Artículo agregado al carrito exitosamente.');
    }

    /**
     * Elimina un artículo del carrito.
     */
    public function destroy($id)
    {
        // Obtener el artículo del carrito por el ID
        $item = Carrito::find($id);

        // Verificar si el artículo existe
        if ($item) {
            $item->delete();
            return redirect()->route('carrito')->with('success', 'Artículo eliminado del carrito.');
        }

        return redirect()->route('carrito')->with('error', 'Artículo no encontrado.');
    }

    public function imprimirTicket()
    {
        $user = Auth::user();
        $carritoItems = Carrito::where('id_user', $user->id)->with('articulo')->get();

        // Calcula el total del carrito
        $totalProductos = $carritoItems->sum('precio');
        $costoEnvio = 50; // Ejemplo de costo de envío
        $descuentos = 10; // Ejemplo de descuentos
        $total = $totalProductos + $costoEnvio - $descuentos;

        // Genera el PDF
        $pdf = PDF::loadView('ticket', compact('carritoItems', 'totalProductos', 'costoEnvio', 'descuentos', 'total'));

        // Devuelve el PDF al navegador
        return $pdf->download('ticket_compra.pdf');
    }

    public function pagar()
    {
        $user = Auth::user();
        
        // Elimina todos los artículos del carrito
        Carrito::where('id_user', $user->id)->delete();

        return redirect()->route('carrito')->with('success', 'Compra realizada con éxito');
    }


}
