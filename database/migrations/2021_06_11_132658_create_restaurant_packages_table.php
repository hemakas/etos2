<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_packages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('booking_package_id');
            $table->foreign('booking_package_id')->references('id')
                ->on('booking_packages')
                ->onDelete('cascade');

            $table->string('sector')->nullable();

            $table->unsignedBigInteger('restaurant');
            $table->foreign('restaurant')->references('id')
                ->on('restaurants')
                ->onDelete('cascade');

            $table->unsignedBigInteger('currency');
            $table->foreign('currency')->references('id')
                ->on('currencies')
                ->onDelete('cascade');

            $table->string('lunch');
            $table->string('dinner');
            $table->string('tax');
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
        Schema::dropIfExists('restaurant_packages');
    }
}
