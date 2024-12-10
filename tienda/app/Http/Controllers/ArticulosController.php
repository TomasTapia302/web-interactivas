<?php

namespace App\Http\Controllers;

use App\Models\articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{


    public function index()
    {
        $articulos = articulos::all();
        return view('welcome', compact('articulos'));
    }
   

    public function MisArticulos(Request $request)
{
    $query = articulos::query();

    if ($request->has('hombres')) {
        $query->where('tipo', 'hombres');
    }

    if ($request->has('mujeres')) {
        $query->orWhere('tipo', 'mujeres');
    }

    if ($request->has('niños')) {
        $query->orWhere('tipo', 'niños');
    }

    $articulos = $query->get();

    return view('MisArticulos', compact('articulos'));
}


    public function home()
    {
        // Aquí puedes agregar lógica específica para la vista 'home'
        $articulos = articulos::all();
        return view('home', compact('articulos'));
    }

    public function hombres()
    {
        $articulos = articulos::where('tipo', 'Hombres')->get();
        return view('hombres', compact('articulos'));
    }

    public function mujeres()
    {
        $articulos = articulos::where('tipo', 'Mujeres')->get();
        return view('mujeres', compact('articulos'));
    }

    public function ninos()
    {
        $articulos = articulos::where('tipo', 'Niños')->get();
        return view('ninos', compact('articulos'));
    }

    public function accesorios()
    {
        $articulos = articulos::where('tipo', 'Accesorios')->get();
        return view('accesorios', compact('articulos'));
    }

    public function create()
    {
        return view('agregar_articulo');
    }


    
    public function store(Request $request)
    {
        // Validación de los campos
        $request->validate([
            'Nom_articulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'inventario' => 'required|integer',
            'tipo' => 'required|string|in:Hombres,Mujeres,Niños,Accesorios',
            'url_imagen' => 'required|url',
        ]);
    
        // Crear una nueva instancia del modelo Articulo
        $articulo = new articulos();
        $articulo->Nom_articulo = $request->Nom_articulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->inventario = $request->inventario;
        $articulo->tipo = $request->tipo;
        $articulo->id_vendedor = 1;  // Asignar el id del vendedor (por ejemplo, 1)
        $articulo->url_imagen = $request->url_imagen;
    
        // Guardar el artículo en la base de datos
        if ($articulo->save()) {
            // Si el guardado es exitoso, redirigir a la vista home con un mensaje de éxito
            return redirect()->route('home')->with('success', 'Artículo agregado con éxito');
        } else {
            // Si hay un problema al guardar, redirigir con un mensaje de error
            return redirect()->back()->with('error', 'Hubo un problema al agregar el artículo. Inténtalo de nuevo.');
        }
    }
    
    
    public function edit($id)
    {
        $articulo = articulos::find($id);
    
        // Asegúrate de que este sea el nombre correcto de la vista
        return view('articuloedit', compact('articulo'));
    }
       
    public function update(Request $request, $id)
    {
        // Validar los campos
        $request->validate([
            'Nom_articulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'inventario' => 'required|integer',
            'tipo' => 'required|string|in:Hombres,Mujeres,Niños,Accesorios',
            'url_imagen' => 'required|url',
        ]);
    
        // Buscar el artículo por ID y actualizarlo
        $articulo = articulos::findOrFail($id);
        $articulo->Nom_articulo = $request->Nom_articulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->inventario = $request->inventario;
        $articulo->tipo = $request->tipo;
        $articulo->url_imagen = $request->url_imagen;
    
        // Guardar cambios en la base de datos
        if ($articulo->save()) {
            return redirect()->route('home')->with('success', 'Artículo actualizado con éxito');
        } else {
            return redirect()->back()->with('error', 'Hubo un problema al actualizar el artículo');
        }
    }
    
    
    

    public function show($id)
    {
        $articulo = articulos::findOrFail($id);
        return view('articulo', compact('articulo'));
    }

    public function addToCart(Request $request, $id)
    {
        // Lógica para agregar al carrito (comentada en el original)
    }
}
