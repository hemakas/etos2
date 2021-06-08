<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expense_packages', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')
                  ->on('cities')
                  ->onDelete('cascade');
            
            $table->unsignedBigInteger('expense_sheet_package_id');
            $table->foreign('expense_sheet_package_id')->references('id')
                ->on('expense_sheet_packages')
                ->onDelete('cascade');

            $table->unsignedBigInteger('entrance_id');
            $table->foreign('entrance_id')->references('id')
                    ->on('entrances')
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
        Schema::dropIfExists('expense_packages');
    }
}
