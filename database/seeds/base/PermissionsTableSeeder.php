<?php

namespace Seeds\Base;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsTableSeeder extends Seeder
{
    private $permissions = [
        'edit own user',
        'view own user',
        'edit own jobs',
        'view own jobs',
        'view own_jobs_schedule',
        'edit jobs',
        'view jobs',
        'create jobs',
        'edit jobs_schedule',
        'view jobs_schedule',
        'create jobs_schedule',
        'view customers',
        'edit customers',
        'create customers',
        'view customer_address',
        'edit customer_address',
        'create customer_address',
        'view customer_person',
        'edit customer_person',
        'create customer_person',
        'view person',
        'edit person',
        'create person',
        'edit lower user',
        'view lower user',
        'create lower user',
        'disable lower user',
        'edit company',
        'view company',
        'create company',
        'edit company_address',
        'view company_address',
        'create company_address',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
