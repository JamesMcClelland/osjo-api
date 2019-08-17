<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompanyAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('company_addresses', function(Blueprint $table)
		{
			$table->foreign('address_id', 'ca_address')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('company_id', 'ca_company')->references('id')->on('companies')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('company_addresses', function(Blueprint $table)
		{
			$table->dropForeign('ca_address');
			$table->dropForeign('ca_company');
		});
	}

}
