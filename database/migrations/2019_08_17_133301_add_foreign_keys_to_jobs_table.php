<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->foreign('customer_address_id', 'job_address')->references('id')->on('customer_addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_id', 'job_customer')->references('id')->on('customers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('customer_person_id', 'job_person')->references('id')->on('customer_people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('job_type_id', 'jobs_type')->references('id')->on('job_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('jobs', function(Blueprint $table)
		{
			$table->dropForeign('job_address');
			$table->dropForeign('job_customer');
			$table->dropForeign('job_person');
			$table->dropForeign('jobs_type');
		});
	}

}
