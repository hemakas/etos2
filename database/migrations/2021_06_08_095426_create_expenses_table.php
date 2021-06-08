<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bfn_num')->default('0');
            $table->string('voucher_num')->default('0');
            $table->date('date');
            
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')
                  ->on('cities')
                  ->onDelete('cascade');
            
            $table->unsignedBigInteger('entrance_id');
            $table->foreign('entrance_id')->references('id')
                ->on('entrances')
                ->onDelete('cascade');   

            $table->integer('ticket_count')->nullable();
            $table->float('ticket_price', 8, 2)->nullable();
            $table->float('total', 8, 2)->nullable();

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
        Schema::dropIfExists('expenses');
    }
}
