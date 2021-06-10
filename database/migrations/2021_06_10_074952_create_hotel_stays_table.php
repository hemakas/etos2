<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelStaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_stays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city')->nullable();
            $table->integer('local_id')->nullable();
            $table->string('bfn_num')->nullable();
            $table->string('voucher_num')->nullable();
            $table->string('first_checkin')->nullable();
            
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
            
            $table->string('vat')->nullable();
            $table->string('arrival_for')->default('-');
            $table->string('special_note')->nullable();
            $table->string('rate_applicable')->nullable();
            $table->integer('status')->default(4);
            $table->tinyInteger('is_client_visible')->default(0);

            $table->string('contact_on')->nullable();
            $table->string('arrival_by')->nullable();
            $table->string('deprature_by')->nullable();
            $table->tinyInteger('is_amended')->default(0);
            $table->tinyInteger('amendment_num')->default(0);
            $table->string('confirmed_by')->nullable();
            $table->string('confirm_by')->nullable();
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
        Schema::dropIfExists('hotel_stays');
    }
}
