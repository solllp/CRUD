<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Laptop Gamer',
            'precio' => 15000,
            'stock' => 5,
            'categoria_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Mouse Logitech',
            'precio' => 500,
            'stock' => 20,
            'categoria_id' => 1
        ]);

        Producto::create([
            'nombre' => 'XBOX Series X',
            'precio' => 3000,
            'stock' => 15,
            'categoria_id' => 1
        ]);

        Producto::create([
            'nombre' => 'Sofa',
            'precio' => 1200,
            'stock' => 8,
            'categoria_id' => 2
        ]);
        
        Producto::create([
            'nombre' => 'Mesa',
            'precio' => 2500,
            'stock' => 10,
            'categoria_id' => 2
        ]);
    }
    
    
}
