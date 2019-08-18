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
        'edit own job',
        'view own job',
        'view own_job_schedule',
        'edit job',
        'view job',
        'create job',
        'delete job',
        'edit job_schedule',
        'view job_schedule',
        'create job_schedule',
        'view customer',
        'edit customer',
        'create customer',
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
