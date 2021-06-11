<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcursionLocalGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursion_local_guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('type')->nullable();
            $table->float('amount', 8, 2)->default(0.0);
            $table->integer('days');
            $table->float('total', 8, 2)->default(0.0);

            $table->unsignedBigInteger('excursion_booking_id');
            $table->foreign('excursion_booking_id')->references('id')
                ->on('excursion_bookings')
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
        Schema::dropIfExists('excursion_local_guides');
    }
}
