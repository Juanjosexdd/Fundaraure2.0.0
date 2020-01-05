<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create();

        Role::create([
        	'name' 		=> 'Admin',
        	'slug' 		=> 'Admin',
        	'special' 	=> 'all-access'
        ]);
    }
}
