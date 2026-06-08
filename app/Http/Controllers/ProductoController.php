<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    public function listar()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }
    public function formulario()
    {
        return view('productos.formulario');
    }
    public function store(Request $request)
    {
        Producto::create(['nombre' => $request->nombre, 'precio' => $request->precio, 'stock' => $request->stock,]);
        return redirect('/productosGuardados');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);

        if (!$producto) {
            return "Producto no encontrado";
        }

        $producto->delete();

        return redirect('/productosGuardados');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.edit', compact('producto'));
    }


    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
        ]);

        return redirect('/productosGuardados');
    }
}
