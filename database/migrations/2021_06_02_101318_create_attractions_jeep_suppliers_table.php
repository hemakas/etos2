<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsJeepSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions_jeep_suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('attractions_id')->constrained()->onDelete('cascade');
            $table->foreignId('jeep_supplier_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('attractions_jeep_suppliers');
    }
}
