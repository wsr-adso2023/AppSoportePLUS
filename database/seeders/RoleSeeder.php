<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Administrador']);
        $recepcion = Role::create(['name' => 'Recepción']);
        $bodega = Role::create(['name' => 'Bodega']);
        $soportetecnico = Role::create(['name' => 'Soporte técnico']);

        // Permisos del Administrador
        $admin->givePermissionTo([

            // Administracion de Usuarios
            'create-user',
            'edit-user',
            'delete-user',

            'create-role', 
            'edit-role', 
            'delete-role',
            
            // Administracion de Productos
            'create-product',
            'edit-product',
            'delete-product',

            // Administracion de Proveedores
            'create-supplier',
            'edit-supplier',
            'delete-supplier',

            // Administracion de Clientes
            'create-customer',
            'edit-customer',
            'delete-customer',
    
            // Administracion de Solicitudes Soporte Tecnico
            'create-support',
            'edit-support',
            'delete-support',

            // Administracion de Reportes de soporte tecnico
            'create-diagnosticreports',
            'edit-diagnosticreports',
            'delete-diagnosticreports'

        ]);

        // Permisos de Recepcion
        $recepcion->givePermissionTo([
            
            // Administracion de Clientes
            'create-customer',
            'edit-customer',
            'delete-customer',
    
            // Administracion de Solicitudes Soporte Tecnico
            'create-support',
            'edit-support',
            'delete-support',
        ]);

        // Permisos de Bodega
        $bodega->givePermissionTo([

            // Administracion de Productos
            'create-product',
            'edit-product',
            'delete-product',

            // Administracion de Proveedores
            'create-supplier',
            'edit-supplier',
            'delete-supplier',
        ]);

        // Permisos de Soporte Tecnico
        $soportetecnico->givePermissionTo([

             // Administracion de Solicitudes Soporte Tecnico
             'create-support',
             'edit-support',
             'delete-support',
 
             // Administracion de Reportes de soporte tecnico
             'create-diagnosticreports',
             'edit-diagnosticreports',
             'delete-diagnosticreports'
        ]);
    }
}
