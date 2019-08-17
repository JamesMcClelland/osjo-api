<?php

namespace Seeds\Local;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Driver/Worker
        $user = new User();
        $user->email = 'driver@osjo-api.com';
        $user->first_name = 'Driver';
        $user->last_name = 'Demo';
        $user->password = bcrypt('password');
        $user->disabled = 0;
        $user->access_level = 1;
        $user->assignRole(['User', 'Worker']);
        $user->save();

        //Office Admin
        $user = new User();
        $user->email = 'admin@osjo-api.com';
        $user->first_name = 'Office';
        $user->last_name = 'Demo';
        $user->password = bcrypt('password');
        $user->disabled = 0;
        $user->access_level = 2;
        $user->assignRole(['User', 'Office']);
        $user->save();

        //User Admin
        $user = new User();
        $user->email = 'useradmin@osjo-api.com';
        $user->first_name = 'User';
        $user->last_name = 'Demo';
        $user->password = bcrypt('password');
        $user->disabled = 0;
        $user->access_level = 3;
        $user->assignRole(['User', 'User Management']);
        $user->save();

        //Company Admin
        $user = new User();
        $user->email = 'companyadmin@osjo-api.com';
        $user->first_name = 'Company Admin';
        $user->last_name = 'Demo';
        $user->password = bcrypt('password');
        $user->disabled = 0;
        $user->access_level = 4;
        $user->assignRole(['User', 'Company Management']);
        $user->save();

        //Super Admin
        $user = new User();
        $user->email = 'superadmin@osjo-api.com';
        $user->first_name = 'Super Admin';
        $user->last_name = 'Demo';
        $user->password = bcrypt('password');
        $user->disabled = 0;
        $user->access_level = 5;
        $user->assignRole(['User', 'Super Admin']);
        $user->save();
    }
}
