<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipleAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principle_agents', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('suffix');
            $table->string('code');
            $table->string('postal')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->text('address');
            $table->string('telephone1')->nullable();
            $table->string('pre_telephone1')->nullable();
            $table->string('telephone2')->nullable();
            $table->string('pre_telephone2')->nullable();
            $table->string('country');
            $table->string('fax');
            $table->string('city');
            $table->string('loginid')->nullable();
            $table->string('password')->nullable();
            $table->tinyInteger('is_active');
            $table->text('description')->nullable();
            $table->tinyInteger('is_card')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('currency')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

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
        Schema::dropIfExists('principle_agents');
    }
}
