<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('entrance_code');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')
                  ->on('cities')
                  ->onDelete('cascade');

            $table->string('ticket_foreign_adult');
            $table->string('ticket_foreign_child');
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
        Schema::dropIfExists('entrances');
    }
}
