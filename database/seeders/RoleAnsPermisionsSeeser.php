<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAnsPermisionsSeeser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::firstOrCreate([
           'name' => 'admin',
        ]);

        $roleUser = Role::firstOrCreate([
            'name' => 'user',
        ]);

        Permission::firstOrCreate([
            'name' => 'user habilitado',
            ]
        );
        Permission::firstOrCreate([
            'name' => 'curso habilitado',
            ]
        );
        Permission::firstOrCreate([
            'name' => 'video habilitado',
            ]
        );
        Permission::firstOrCreate([
            'name' => 'admin habilitado',
            ]
        );

        $roleAdmin->givePermissionTo('admin habilitado');

        $roleUser->givePermissionTo('user habilitado');
        $roleUser->givePermissionTo('curso habilitado');
        $roleUser->givePermissionTo('video habilitado');

        /*
        Para asignar roles cuando se crea el usuario o cuando tenga el ABM de asignaciones de roles
         $user->assignRole('user habilitado')

         $admin->assignRole('admin habilitado')


         */


    }
}
