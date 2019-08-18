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
            'edit own job',
            'view own job',
            'view own job_schedule',
        ]);

        $officeRole = Role::findByName('Office');
        $officeRole->givePermissionTo([
            'edit job',
            'view job',
            'create job',
            'delete job',
            'edit job_schedule',
            'view job_schedule',
            'create job_schedule',
            'view customer',//Todo
            'edit customer',//Todo
            'create customer',//Todo
            'view customer_address',//Todo
            'edit customer_address',//Todo
            'create customer_address',//Todo
            'view customer_person',//Todo
            'edit customer_person',//Todo
            'create customer_person',//Todo
            'view person',//Todo
            'edit person',//Todo
            'create person',//Todo
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
            'edit company',//Todo
            'view company',//Todo
            'create company',//Todo
            'edit company_address',//Todo
            'view company_address',//Todo
            'create company_address',//Todo
        ]);
    }
}
