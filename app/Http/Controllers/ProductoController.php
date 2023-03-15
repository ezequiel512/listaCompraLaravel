<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function getIndex()
    {
        $productos = Producto::all();
        return view ('productos.index', array('productos'=>$productos));
    }
    public function getCreate()
    {
        return view('productos.create');
    }
    public function getShow($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.show', array('productos' => $productos,
                                            'id'=>$id));
    }
    public function getEdit($id)
    {
        $productos = Producto::findOrFail($id);
        return view('productos.edit', array('productos' => $productos,
                                            'id' => $id));
    }
    public function postCreate(Request $request)
    {
        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();

        return redirect()->action([ProductoController::class, 'getIndex']);
    }
    public function putEdit($id, Request $request)
    {
        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();

        return redirect()->action([ProductoController::class, 'getShow'] , $id);
    }
}
