<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('voucher_num');
            $table->float('actual_amount', 8,2)->nullable();
            $table->float('balance', 8,2)->nullable();
            $table->string('bfn_num');
            $table->float('tour_advance', 8,2)->nullable();
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
        Schema::dropIfExists('expense_sheets');
    }
}
