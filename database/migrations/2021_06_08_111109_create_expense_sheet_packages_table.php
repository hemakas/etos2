<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpenseSheetPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_sheet_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('booking_package_id');
            $table->foreign('booking_package_id')->references('id')
                ->on('booking_packages')
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
        Schema::dropIfExists('expense_sheet_packages');
    }
}
