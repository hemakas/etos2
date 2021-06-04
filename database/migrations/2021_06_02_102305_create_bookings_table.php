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
            $table->integer('booking_year')->nullable();
            $table->string('packing_code')->nullable();
            $table->string('agent_code')->nullable();
            $table->string('agent_name')->default('xx');
            $table->string('pax_name')->default('xx');
            $table->integer('booking_type')->default('xx');
            $table->string('booking_ref')->default('N/A');
            $table->string('arrival_date')->nullable();
            $table->string('departure_date')->nullable();
            $table->string('departure_flight_name')->nullable();
            $table->string('arrival_flight_name')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('departure_time')->nullable();
            $table->integer('nights')->default(0);
            $table->integer('days')->default(0);
            $table->integer('adults')->default(0);
            $table->integer('children')->default(0);
            $table->integer('infants')->default(0);
            $table->integer('total')->default(0);
            $table->integer('single')->default(0);
            $table->integer('double')->default(0);
            $table->integer('tri')->default(0);
            $table->integer('twin')->default(0);
            $table->integer('child')->default(0);
            $table->integer('extra')->default(0);
            $table->integer('guide')->default(0);
            $table->integer('employee')->default(0);
            $table->tinyInteger('status')->default(4);
            $table->tinyInteger('transport_confirmation')->default(4);
            $table->tinyInteger('reservation_confirmation')->default(4);
            $table->tinyInteger('nationality')->nullable();
            $table->tinyInteger('master_currency')->nullable();
            $table->text('confirmed_by')->nullable();
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
