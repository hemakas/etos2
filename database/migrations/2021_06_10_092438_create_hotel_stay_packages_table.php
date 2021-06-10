<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelStayPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_stay_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city');
            
            $table->unsignedBigInteger('booking_package_id');
            $table->foreign('booking_package_id')->references('id')
                ->on('booking_packages')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')
                ->on('hotels')
                ->onDelete('cascade');

            $table->unsignedBigInteger('market_id');
            $table->foreign('market_id')->references('id')
                ->on('markets')
                ->onDelete('cascade');

            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')
                ->on('currencies')
                ->onDelete('cascade');
            
            $table->string('vat');
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
        Schema::dropIfExists('hotel_stay_packages');
    }
}
