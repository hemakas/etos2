<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('local_guides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bfn_num')->default('0');
            $table->tinyInteger('type_of_guide')->default(0);
            $table->tinyInteger('day_type')->default(0);
            $table->tinyInteger('no_of_days')->default(0);
            $table->tinyInteger('no_of_guide')->default(0);
            $table->float('cost', 8,2)->default(0.0);
            $table->float('total_cost', 8,2)->default(0.0);
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
        Schema::dropIfExists('local_guides');
    }
}
