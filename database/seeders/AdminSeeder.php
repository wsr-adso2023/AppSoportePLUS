<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        $superAdmin = User::create([
            'name' => 'Juan',
            'lastname' => 'Lopez',
            'birthdate' => '02/07/1995',
            'documentype' => 'CC',
            'idnumber' => '11253423',
            'phone' => '3106506250',
            'username' => 'admin123',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123')
        ]);
        $superAdmin->assignRole('Administrador');
    }
}
