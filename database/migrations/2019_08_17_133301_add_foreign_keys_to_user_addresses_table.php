<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_addresses', function(Blueprint $table)
		{
			$table->foreign('address_id', 'ua_address')->references('id')->on('addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'ua_user')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_addresses', function(Blueprint $table)
		{
			$table->dropForeign('ua_address');
			$table->dropForeign('ua_user');
		});
	}

}
