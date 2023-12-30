<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sin valor
        Supplier::create([
            'name' => 'Default',
            'lastname' => 'Default',
            'birthdate' => '1/1/2024',
            'documentype' => 'CC',
            'idnumber' => '1122334455',
            'datentry' => '1/1/2024',
            'address' => 'Default',
            'phone' => '77777',
            'email' => 'defaul@mail.com',
            
        ]);
    }
}
