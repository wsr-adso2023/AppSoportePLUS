<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Sin valor
         Product::create([
            'name' => 'Sinvalor',
            'description' => 'Sinvalor',
            'category' => 'Tecnologia',
            'supplier_id' => '1',
            'date' => '1/1/2024',
            'stock' => '1000',
            'precio_venta' => '0',
            
        ]);
    }
}
