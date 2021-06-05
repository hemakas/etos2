<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attraction_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sector');

            $table->unsignedBigInteger('booking_package_id');
            $table->foreign('booking_package_id')->references('id')
                    ->on('booking_packages')
                    ->onDelete('cascade');

            $table->string('attraction');

            $table->unsignedBigInteger('jeep_supplier_id');
            $table->foreign('jeep_supplier_id')->references('id')
                    ->on('jeep_suppliers')
                    ->onDelete('cascade');

            $table->string('national');
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
        Schema::dropIfExists('attraction_packages');
    }
}
