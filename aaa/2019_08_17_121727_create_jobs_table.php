<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->date('due_date');
            $table->dateTime('completed_at');
            $table->timestamps();

//            $table->foreign('customer_id')->references('id')->on('customers');
//            $table->foreign('customer_person_id')->references('id')->on('jobs');
//            $table->foreign('customer_address_id')->references('id')->on('jobs');
//            $table->foreign('job_type_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
