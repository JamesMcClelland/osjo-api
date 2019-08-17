<?php

namespace Seeds\Base;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Intermediate Roles
        Role::create(['name' => 'User']);
        Role::create(['name' => 'Worker']);
        Role::create(['name' => 'Office']);
        Role::create(['name' => 'User Management']);
        Role::create(['name' => 'Company Management']);
        Role::create(['name' => 'Super Admin']);
    }
}
