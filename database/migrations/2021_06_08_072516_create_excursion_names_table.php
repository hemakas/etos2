<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcursionNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursion_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('excursion_name');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')
                  ->on('cities')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('currency_id');
            $table->foreign('currency_id')->references('id')
                  ->on('currencies')
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
        Schema::dropIfExists('excursion_names');
    }
}
