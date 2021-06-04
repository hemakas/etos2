<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_name');
            $table->string('package_code');
            $table->string('agent_id');
            $table->string('valid_from');
            $table->string('valid_till');
            $table->string('booking_type');
            $table->string('nights');
            $table->string('days');
            $table->string('nationality');
            $table->string('master_currency');
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
        Schema::dropIfExists('booking_packages');
    }
}
