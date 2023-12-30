<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Servicerequired;

class ServicerequiredSupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Actualizacion
        Servicerequired::create([
            'name' => 'Actualización',
        ]);

        // Mantenimiento
        Servicerequired::create([
            'name' => 'Mantenimiento',
        ]);

        // Reparacion
        Servicerequired::create([
            'name' => 'Reparación',
        ]);
    }
}
