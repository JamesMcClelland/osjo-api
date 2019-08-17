<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserCompanyPermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_company_permissions', function(Blueprint $table)
		{
			$table->foreign('company_id', 'ucp_company')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('permission_id', 'ucp_permission')->references('id')->on('permissions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'ucp_user')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_company_permissions', function(Blueprint $table)
		{
			$table->dropForeign('ucp_company');
			$table->dropForeign('ucp_permission');
			$table->dropForeign('ucp_user');
		});
	}

}
