<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionJeepSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attraction_jeep_suppliers', function (Blueprint $table) {          
            $table->bigIncrements('id');

            $table->unsignedBigInteger('attractions_id');
            $table->unsignedBigInteger('jeep_suppliers_id');
            
            $table->foreign('attractions_id')->references('id')
                    ->on('attractions')
                    ->onDelete('cascade');
            $table->foreign('jeep_suppliers_id')->references('id')
                    ->on('jeep_suppliers')
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
        Schema::dropIfExists('attraction_jeep_suppliers');
    }
}
