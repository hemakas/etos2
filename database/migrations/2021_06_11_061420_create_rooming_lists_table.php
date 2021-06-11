<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomingListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooming_lists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bfn_num')->nullable();
            $table->integer('qty')->default(0);
            $table->integer('room_type_id')->nullable();
            $table->string('name')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('rooming_lists');
    }
}
