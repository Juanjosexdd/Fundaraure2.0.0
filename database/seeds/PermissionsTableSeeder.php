<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name'        => 'Navegar Usuarios',
        	'slug'        => 'config.users.index',
        	'description' => 'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
        	'name'        => 'Ver detalle de Usuarios',
        	'slug'        => 'config.users.show',
        	'description' => 'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de Usuarios',
        	'slug'        => 'config.users.create',
        	'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de Usuarios',
        	'slug'        => 'config.users.edit',
        	'description' => 'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
        	'name'        => 'Papelera de Usuarios',
        	'slug'        => 'config.users.trashed',
        	'description' => 'Enviar a la papelera usuarios registrados',
        ]);
        Permission::create([
        	'name'        => 'Eliminar Usuarios',
        	'slug'        => 'config.users.permanentDeleteSoftDeleted',
        	'description' => 'Eliminar permanentemente usuarios',
		]);
		Permission::create([
        	'name'        => 'Restaurar Usuarios',
        	'slug'        => 'config.users.restore',
        	'description' => 'Restaurar usuarios de la papelera',
        ]);
        //Roles
        Permission::create([
        	'name'        => 'Navegar roles',
        	'slug'        => 'config.roles.index',
        	'description' => 'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de roles',
        	'slug'        => 'config.roles.create',
        	'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de roles',
        	'slug'        => 'config.roles.edit',
        	'description' => 'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar roles',
        	'slug'        => 'config.roles.destroy',
        	'description' => 'Eliminar cualquier rol del sistema',
		]);
		//Departamento
        Permission::create([
        	'name'        => 'Navegar dpto',
        	'slug'        => 'config.dpto.index',
        	'description' => 'Lista y navega todos los config. del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de dpto',
        	'slug'        => 'config.dpto.create',
        	'description' => 'Editar cualquier dato de un dpto del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de dpto',
        	'slug'        => 'config.dpto.edit',
        	'description' => 'Editar cualquier dato de un dpto del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar dpto',
        	'slug'        => 'config.dpto.destroy',
        	'description' => 'Eliminar cualquier dpto del sistema',
		]);
		//Cargo
        Permission::create([
        	'name'        => 'Navegar cargo',
        	'slug'        => 'config.cargo.index',
        	'description' => 'Lista y navega todos los cargo del sistema',
        ]);
        Permission::create([
        	'name'        => 'Creación de cargo',
        	'slug'        => 'config.cargo.create',
        	'description' => 'Editar cualquier dato de un cargo del sistema',
        ]);
        Permission::create([
        	'name'        => 'Edición de cargo',
        	'slug'        => 'config.cargo.edit',
        	'description' => 'Editar cualquier dato de un cargo del sistema',
        ]);
        Permission::create([
        	'name'        => 'Eliminar cargo',
        	'slug'        => 'config.cargo.destroy',
        	'description' => 'Eliminar cualquier cargo del sistema',
        ]);
    }
}
