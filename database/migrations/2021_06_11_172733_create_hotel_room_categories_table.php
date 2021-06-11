<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRoomCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_room_categories', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('hotels_id');
            $table->foreign('hotels_id')->references('id')
                ->on('hotels')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('room_category_id');
            $table->foreign('room_category_id')->references('id')
                ->on('room_categories')
                ->onDelete('cascade');

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
        Schema::dropIfExists('hotel_room_categories');
    }
}
