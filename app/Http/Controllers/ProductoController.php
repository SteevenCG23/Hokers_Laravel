<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function producto()
    {
        return view('productos');
    }
    public function guardar(Request $request)
    {
        $producto = new Producto();
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->tipo_producto = $request->input('tipo_producto');
        $producto->precio_venta = $request->input('precio_venta');
        
        if ($request->hasFile('foto_producto')) {
            $foto_producto = $request->file('foto_producto');
            $producto->foto_producto = file_get_contents($foto_producto->getRealPath());
        }

        $producto->save();

        return redirect('/vista');
    }

    public function vista()
    {
        $productos = Producto::all();
        return view('vistaproducto', compact('productos'));
    }

   




}
