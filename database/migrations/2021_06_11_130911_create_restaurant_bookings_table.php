<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sector')->nullable();
            $table->string('bfn_num')->nullable();

            $table->unsignedBigInteger('voucher_num');
            $table->foreign('voucher_num')->references('id')
                ->on('voucher_numbers')
                ->onDelete('cascade');

            $table->unsignedBigInteger('restaurant');
            $table->foreign('restaurant')->references('id')
                ->on('restaurants')
                ->onDelete('cascade');

            $table->string('date')->nullable();

            $table->unsignedBigInteger('currency');
            $table->foreign('currency')->references('id')
                ->on('currencies')
                ->onDelete('cascade');

            $table->string('adult')->nullable();
            $table->string('adult_rate')->nullable();
            $table->string('child')->nullable();
            $table->string('child_rate')->default(0);
            $table->string('roe')->nullable();
            $table->tinyInteger('lunch')->nullable();
            $table->tinyInteger('dinner')->nullable();
            $table->string('tax')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('confirmation_by')->nullable();
            $table->string('contact_on')->nullable();
            
            $table->unsignedBigInteger('guide');
            $table->foreign('guide')->references('id')
                ->on('guides')
                ->onDelete('cascade');

            $table->string('foc')->nullable();
            $table->text('remarks');
            $table->tinyInteger('is_amended')->default(0);
            $table->tinyInteger('amendment_num')->default(0);
            $table->string('confirmed_by')->nullable();
            $table->string('rate_applicable')->nullable();
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
        Schema::dropIfExists('restaurant_bookings');
    }
}
