<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bfn')->default('CR/QB/DEU/');
            $table->string('bfn_num')->nullable();
            $table->int('booking_year')->nullable();
            $table->string('packing_code')->nullable();
            $table->string('agent_code')->nullable();
            $table->id('agent_name')->default('xx');
            $table->string('pax_name')->default('xx');
            $table->int('booking_type')->default('xx');
            $table->string('booking_ref')->default('N/A');
            $table->string('arrival_date')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('departure_flight_name')->nullable();
            $table->string('arrival_flight_name')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('departure_time')->nullable();
            $table->int('nights')->default(0);
            $table->int('days')->default(0);
            $table->int('adults')->default(0);
            $table->int('children')->default(0);
            $table->int('infants')->default(0);
            $table->int('total')->default(0);
            $table->int('single')->default(0);
            $table->int('double')->default(0);
            $table->int('tri')->default(0);
            $table->int('twin')->default(0);
            $table->int('child')->default(0);
            $table->int('extra')->default(0);
            $table->int('guide')->default(0);
            $table->int('employee')->default(0);
            $table->tinyInteger('status')->default(4);
            $table->tinyInteger('transport_confirmation')->default(4);
            $table->tinyInteger('reservation_confirmation')->default(4);
            $table->tinyInteger('nationality')->nullable();
            $table->tinyInteger('master_currency')->nullable();
            $table->varchar('confirmed_by')->nullable();
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
        Schema::dropIfExists('bookings');
    }
}
