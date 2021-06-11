<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelStayRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_stay_ranges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bfn_num')->nullable();

            $table->unsignedBigInteger('hotel');
            $table->foreign('hotel')->references('id')
                ->on('hotels')
                ->onDelete('cascade');

            $table->unsignedBigInteger('hotel_stays_id');
            $table->foreign('hotel_stays_id')->references('id')
                ->on('hotel_stays')
                ->onDelete('cascade');

            $table->string('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->string('room_type')->nullable();

            $table->unsignedBigInteger('meal_plan');
            $table->foreign('meal_plan')->references('id')
                ->on('meal_plans')
                ->onDelete('cascade');

            $table->string('no_of_nights')->nullable();
            $table->string('sngl')->nullable();
            $table->string('sngl_rate')->default(0);
            $table->string('dbl_rate')->nullable();
            $table->string('trl')->nullable();
            $table->string('trl_rate')->nullable();
            $table->string('twin')->default(0);
            $table->string('twin_rate')->nullable();
            $table->string('child')->nullable();
            $table->string('child_rate')->nullable();
            $table->string('extra')->default(0);
            $table->string('extra_rate')->nullable();
            $table->string('guide')->nullable();
            $table->string('guide_rate')->nullable();
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
        Schema::dropIfExists('hotel_stay_ranges');
    }
}
