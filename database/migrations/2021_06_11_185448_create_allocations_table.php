<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allocations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')
                ->on('hotels')
                ->onDelete('cascade');

            $table->tinyInteger('period_id')->nullable();
            $table->tinyInteger('room_type_id')->nullable();
            $table->string('startDate')->nullable();
            $table->string('endDate')->nullable();
            $table->string('allocations')->nullable();
            $table->string('dor')->nullable();
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
        Schema::dropIfExists('allocations');
    }
}
