<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcursionPaxRangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursion_pax_ranges', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('excursion_name_id');
            $table->foreign('excursion_name_id')->references('id')
                ->on('excursion_names')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('pax_range_id');
            $table->foreign('pax_range_id')->references('id')
                ->on('pax_ranges')
                ->onDelete('cascade');

            $table->string('rate')->nullable();
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
        Schema::dropIfExists('excursion_pax_ranges');
    }
}
