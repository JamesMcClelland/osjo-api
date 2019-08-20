<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPersonIdToCustomerPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_people', function (Blueprint $table) {
            $table->foreign('person_id', 'cp_person')->references('id')->on('people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->dropForeign('customer_person');
            $table->foreign('customer_id', 'cp_address')->references('id')->on('people')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_people', function (Blueprint $table) {
            $table->dropForeign('c_person');
            $table->dropForeign('c_address');
            $table->foreign('address_id', 'customer_person')->references('id')->on('customer_addresses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }
}
