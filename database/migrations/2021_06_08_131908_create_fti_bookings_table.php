<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFtiBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fti_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bfn')->default('CR/QB/DEU/');
            $table->string('bfn_num')->nullable();
            $table->integer('text_file_id')->nullable();
            $table->integer('booking_year')->nullable();
            $table->string('package_code')->nullable();
            $table->string('agent_code')->nullable();
            $table->string('agent_name')->default('xx');
            $table->string('pax_name')->default('xx');
            $table->integer('booking_type')->default(1);
            $table->string('booking_ref')->default('N/A');
            $table->date('arrival_date')->nullable();
            $table->date('departure_date')->nullable();
            $table->string('departure_flight_name')->default('0');
            $table->string('arrival_flight_name')->default('0');
            $table->string('arrival_time')->default('0');
            $table->string('departure_time')->default('0');
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
            $table->integer('guide')->default(0);
            $table->string('employee')->default('0');
            $table->tinyInteger('status')->default(4);
            $table->tinyInteger('transport_confirmation')->default(4);
            $table->tinyInteger('reservation_confirmation')->default(4);
            $table->tinyInteger('nationality')->nullable();
            $table->tinyInteger('master_currency')->nullable();
            $table->string('confirmed_by');

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
        Schema::dropIfExists('fti_bookings');
    }
}
