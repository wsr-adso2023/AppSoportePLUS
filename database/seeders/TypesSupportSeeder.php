<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supporttype;

class TypesSupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Estado Nuevo
        Supporttype::create([
            'name' => 'Nueva',
        ]);

        // Estado Completado
        Supporttype::create([
            'name' => 'Garantía',
        ]);
    }
}
