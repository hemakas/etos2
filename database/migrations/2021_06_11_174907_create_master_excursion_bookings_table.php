<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterExcursionBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_excursion_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('bfn')->default('CR/QB/DEU/');
            $table->string('bfn_num')->nullable();
            $table->string('pax_name')->nullable();

            $table->unsignedBigInteger('booking_type');
            $table->foreign('booking_type')->references('id')
                ->on('booking_types')
                ->onDelete('cascade');

            $table->string('booking_ref')->nullable();
            $table->string('arrival_date')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('departure_flight_name')->nullable();
            $table->string('arrival_flight_name')->nullable();
            $table->string('arrival_time')->default(0);
            $table->string('departure_time')->nullable();

            $table->integer('nights')->default(0);
            $table->integer('days')->default(0);
            $table->integer('adults')->default(0);
            $table->integer('children')->default(0);
            $table->integer('infants')->default(0);
            $table->integer('total')->default(0);
            $table->integer('single')->default(0);
            $table->integer('double')->default(0);
            $table->integer('trl')->default(0);
            $table->integer('twin')->default(0);
            $table->integer('child')->default(0);
            $table->integer('extra')->default(0);
            
            $table->unsignedBigInteger('guide');
            $table->foreign('guide')->references('id')
                ->on('guideS')
                ->onDelete('cascade');

            $table->string('employee')->nullable();
            $table->tinyInteger('status')->default(4);
            $table->string('confirmed_by')->default(0);
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
        Schema::dropIfExists('master_excursion_bookings');
    }
}
