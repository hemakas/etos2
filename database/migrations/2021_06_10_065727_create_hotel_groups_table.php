<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_groups', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('group_name');
            $table->string('email');
            $table->string('telephone_1')->nullable();
            $table->string('pre_telephone_1')->nullable();
            $table->string('telephone_2')->nullable();
            $table->string('pre_telephone_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('url')->nullable();
            $table->text('address');
            $table->string('country');
            $table->string('city');
            $table->integer('postal_code')->nullable();

            $table->string('contact_person')->nullable();
            $table->string('designation')->nullable();

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
        Schema::dropIfExists('hotel_groups');
    }
}
