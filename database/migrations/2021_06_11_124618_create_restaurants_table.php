<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('restaurant_name')->nullable();

            $table->unsignedBigInteger('restaurant_country');
            $table->foreign('restaurant_country')->references('id')
                ->on('countries')
                ->onDelete('cascade');

            $table->string('restaurant_city')->nullable();
            $table->tinyInteger('restaurant_is_active')->default(0);
            $table->string('restaurant_email')->nullable();
            $table->string('restaurant_tax');
            $table->string('adult_lunch')->nullable();
            $table->string('adult_lunch_tax')->nullable();
            $table->string('adult_dinner')->nullable();
            $table->string('adult_dinner_tax')->nullable();
            $table->string('child_lunch');
            $table->string('child_lunch_tax');
            $table->string('child_dinner');
            $table->string('child_dinner_tax')->nullable();

            $table->unsignedBigInteger('lunch_currency');
            $table->foreign('lunch_currency')->references('id')
                ->on('currencies')
                ->onDelete('cascade');

            $table->unsignedBigInteger('dinner_currency');
            $table->foreign('dinner_currency')->references('id')
                ->on('currencies')
                ->onDelete('cascade');

            $table->string('contact_name')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_designation');
            $table->string('contact_email');
            $table->string('payee_name');

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
        Schema::dropIfExists('restaurants');
    }
}
