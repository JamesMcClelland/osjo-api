<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('customer_id')->index('job_customer');
			$table->integer('customer_person_id')->nullable()->index('job_person');
			$table->integer('customer_address_id')->index('job_address');
			$table->integer('job_type_id')->index('jobs_type');
			$table->date('due_date');
			$table->dateTime('completed_at')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->string('title');
			$table->text('description', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobs');
	}

}
