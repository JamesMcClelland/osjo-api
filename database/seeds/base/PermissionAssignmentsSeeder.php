<?php
namespace Seeds\Base;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionAssignmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::findByName('User');
        $userRole->givePermissionTo([
            'edit own user',
            'view own user',
        ]);

        $workerRole = Role::findByName('Worker');
        $workerRole->givePermissionTo([
            'edit own jobs',
            'view own jobs',
            'view own_jobs_schedule',
        ]);

        $officeRole = Role::findByName('Office');
        $officeRole->givePermissionTo([
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
        ]);

        $userManagementRole = Role::findByName('User Management');
        $userManagementRole->givePermissionTo([
            'edit lower user',
            'view lower user',
            'create lower user',
            'disable lower user',
        ]);

        $companyManagementRole = Role::findByName('Company Management');
        $companyManagementRole->givePermissionTo([
            'edit company',
            'view company',
            'create company',
            'edit company_address',
            'view company_address',
            'create company_address',
        ]);
    }
}
