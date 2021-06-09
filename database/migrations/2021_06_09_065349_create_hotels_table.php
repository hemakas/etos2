<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('hotel_name')->default('-');
            $table->integer('hotel_category')->default(0);

            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->default('-');
            $table->string('telephone_number1')->default('-');
            $table->string('telephone_number2')->default('-');
            $table->string('email_id')->default('-');
            $table->string('fax')->default('-');
            $table->string('url')->default('-');

            $table->string('hotel_code')->nullable();
            $table->string('hotel_code_private')->nullable();
            $table->string('hotel_code_bus')->nullable();
            $table->string('hotel_code_linked')->nullable();

            $table->string('room_categories')->default('-');
            $table->string('hotel_amenities')->default('-');
            $table->string('distance_ariport')->default('-');
            $table->string('distance_railway_station')->default('-');
            $table->string('checkin_times')->default('-');
            $table->string('checkout_times')->default('-');

            $table->integer('group_name')->default(0);
            $table->string('payee_name')->default('-');

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

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
        Schema::dropIfExists('hotels');
    }
}
