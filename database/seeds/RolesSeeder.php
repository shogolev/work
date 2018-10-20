<?php

use Illuminate\Database\Seeder;
use App\Roles;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
            'role' => 'super-admin'
        ]);
        Roles::create([
            'role' => 'admin'
        ]);
        Roles::create([
            'role' => 'manager'
        ]);
        Roles::create([
            'role' => 'user'
        ]);
    }
}
