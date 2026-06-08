<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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
        $categorias = Categoria::all();

        return view('productos.formulario', compact('categorias'));
    }


    public function store(Request $request)
    {
        $request->validate(
            [
                'nombre' => 'required',
                'precio' => 'required|numeric',
                'stock' => 'required|integer',
                'categoria_id' => 'required'
            ],
            [
                'nombre.required' => 'El nombre es obligatorio.',
                'precio.required' => 'El precio es obligatorio.',
                'precio.numeric' => 'El precio debe ser numérico.',
                'stock.required' => 'El stock es obligatorio.',
                'stock.integer' => 'El stock debe ser un número entero.',
                'categoria_id.required' => 'Debes seleccionar una categoría.'
            ]
        );

        Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'stock' => $request->stock,
            'categoria_id' => $request->categoria_id,
        ]);

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
