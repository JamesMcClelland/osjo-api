<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserCompanyPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_company_permissions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('company_id', false, true)->index('ucp_company');
			$table->integer('user_id', false, true)->index('ucp_user');
			$table->integer('permission_id', false, true)->index('ucp_permission');
			$table->softDeletes();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_company_permissions');
	}

}
