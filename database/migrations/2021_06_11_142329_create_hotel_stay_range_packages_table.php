<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelStayRangePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_stay_range_packages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('hotel');
            $table->foreign('hotel')->references('id')
                ->on('hotels')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('hotel_stay_package_id');
            $table->foreign('hotel_stay_package_id')->references('id')
                ->on('hotel_stay_packages')
                ->onDelete('cascade');
            
            $table->string('room_type');

            $table->unsignedBigInteger('meal_plan');
            $table->foreign('meal_plan')->references('id')
                ->on('meal_plans')
                ->onDelete('cascade');
            
            $table->string('no_of_nights');

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
        Schema::dropIfExists('hotel_stay_range_packages');
    }
}
