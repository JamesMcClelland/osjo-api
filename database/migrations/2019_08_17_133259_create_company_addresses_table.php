<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_addresses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id', false, true)->index('ca_company');
            $table->integer('address_id', false, true)->index('ca_address');
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
		Schema::drop('company_addresses');
	}

}
