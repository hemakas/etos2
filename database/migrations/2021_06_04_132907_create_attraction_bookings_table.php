<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attraction_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bfn_num');
            $table->string('voucher_num');
            $table->string('sector')->nullable();
            $table->string('attraction')->nullable();
            $table->string('date')->nullable();
            $table->string('national')->nullable();
            $table->string('status')->nullable();
            $table->string('confirmation_by')->nullable();
            $table->string('contact_on')->nullable();
            $table->string('rate')->nullable();
            $table->string('foc')->nullable();
            $table->string('adult')->nullable();
            $table->string('child')->nullable();
            $table->string('guide')->nullable();
            $table->string('activity')->nullable();
            $table->string('jeep_count')->nullable();
            $table->string('jeep_supplier_id')->nullable();
            $table->tinyinteger('is_amended')->default(0);
            $table->tinyinteger('amendment_num')->default(0);
            $table->text('remarks')->nullable();
            $table->string('confirmed_by')->nullable();
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
        Schema::dropIfExists('attraction_bookings');
    }
}
