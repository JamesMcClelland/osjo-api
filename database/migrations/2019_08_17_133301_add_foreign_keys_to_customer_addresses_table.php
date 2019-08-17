<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCustomerAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('customer_addresses', function(Blueprint $table)
		{
			$table->foreign('address_id', 'cusa_address')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_id', 'cusa_customer')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('customer_addresses', function(Blueprint $table)
		{
			$table->dropForeign('cusa_address');
			$table->dropForeign('cusa_customer');
		});
	}

}
