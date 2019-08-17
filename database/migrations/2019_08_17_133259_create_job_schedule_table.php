<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_schedule', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('job_id', false, true)->index('jobsc_job');
			$table->integer('user_id', false, true)->index('jobsc_user');
			$table->dateTime('scheduled_time');
			$table->integer('job_length')->nullable()->default(30);
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
		Schema::drop('job_schedule');
	}

}
