<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJobScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('job_schedule', function(Blueprint $table)
		{
			$table->foreign('job_id', 'jobsc_job')->references('id')->on('jobs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'jobsc_user')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('job_schedule', function(Blueprint $table)
		{
			$table->dropForeign('jobsc_job');
			$table->dropForeign('jobsc_user');
		});
	}

}
