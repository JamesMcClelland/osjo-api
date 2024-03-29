<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
            $table->increments('id');
			$table->string('email')->unique();
			$table->string('first_name');
			$table->string('last_name');
			$table->binary('password', 60)->nullable();
            $table->timestamp('email_verified_at')->nullable();
			$table->boolean('disabled')->nullable()->default(1);
			$table->dateTime('last_login')->nullable();
            $table->rememberToken();
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
		Schema::drop('users');
	}

}
