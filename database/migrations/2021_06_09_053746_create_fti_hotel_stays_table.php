<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFtiHotelStaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fti_hotel_stays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('city')->nullable();
            $table->integer('local_id')->nullable();
            $table->string('bfn_num')->nullable();
            $table->string('voucher_num')->nullable();
            $table->string('first_checkin')->nullable();
            $table->string('hotel')->nullable();
            $table->string('market')->nullable();
            $table->string('currency')->nullable();
            $table->string('vat')->nullable();
            $table->string('arrival_for')->default('-');
            $table->string('special_note')->nullable();
            $table->string('rate_applicable')->nullable();
            $table->tinyInteger('status')->default(4);
            $table->tinyInteger('is_client_visible')->default(0);
            $table->string('confirmed_by')->nullable();
            $table->string('confirm_by')->nullable();
            $table->string('contact_on')->nullable();
            $table->string('arrival_by')->nullable();
            $table->tinyinteger('is_amended')->default(0);
            $table->tinyinteger('amendment_num')->default(0);
            $table->string('deprature_by')->nullable();
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
        Schema::dropIfExists('fti_hotel_stays');
    }
}
