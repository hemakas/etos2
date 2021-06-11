<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFtiHotelStayRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fti_hotel_stay_ranges', function (Blueprint $table) {
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

            $table->integer('checkin')->nullable();
            $table->string('checkout')->nullable();
            $table->string('room_type')->nullable();

            $table->unsignedBigInteger('meal_plan');
            $table->foreign('meal_plan')->references('id')
                ->on('meal_plans')
                ->onDelete('cascade');

            $table->string('no_of_nights')->nullable();
            $table->string('sngl')->nullable();
            $table->string('sngl_rate')->nullable();
            $table->string('dbl')->nullable();
            $table->string('dbl_rate')->nullable();
            $table->string('trl')->nullable();
            $table->string('trl_rate')->nullable();
            $table->string('twin')->nullable();
            $table->string('twin_rate')->nullable();
            $table->string('child')->nullable();
            $table->integer('child_rate')->default(0);
            $table->integer('extra')->nullable();
            $table->integer('extra_rate')->default(0);

            $table->unsignedBigInteger('guide');
            $table->foreign('guide')->references('id')
                ->on('guideS')
                ->onDelete('cascade');

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
        Schema::dropIfExists('fti_hotel_stay_ranges');
    }
}
