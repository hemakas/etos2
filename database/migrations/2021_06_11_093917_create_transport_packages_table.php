<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_packages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('transport_id');
            $table->foreign('transport_id')->references('id')
                ->on('transports')
                ->onDelete('cascade');
            
            $table->tinyInteger('estimated_km');
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
        Schema::dropIfExists('transport_packages');
    }
}
