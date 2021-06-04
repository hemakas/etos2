<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('attraction_name');
            $table->string('attraction_code')->nullable();
            $table->string('country')->nullable();
            table->string('city')->nullable();
            table->string('email')->nullable();
            table->string('entrance_foreign_adult')->default('N\A');
            table->string('entrance_foreign_adult_with_tax')->default('N\A');
            table->string('entrance_saarc_adult')->default('N\A');
            table->string('entrance_saarc_adult_with_tax')->default('N\A');
            table->string('entrance_lanka_adult')->default('N\A');
            table->string('entrance_lanka_adult_with_tax')->default('N\A');
            table->string('entrance_lanka_child')->default('N\A');
            table->string('entrance_lanka_child_with_tax')->default('N\A');
            table->string('entrance_saarc_child')->default('N\A');
            table->string('entrance_saarc_child_with_tax')->default('N\A');
            table->string('entrance_foreign_child')->default('N\A');
            table->string('entrance_foreign_child_with_tax')->default('N\A');
            table->string('currency_sri')->default('N\A');
            table->string('currency_saarc')->default('N\A');
            table->string('currency_foreign')->default('N\A');
            table->string('opening_hours')->default('N\A');
            table->string('closed_on')->default('N\A');
            table->string('still_cam_fee')->default('N\A');
            table->string('video_cam_fee')->default('N\A');
            table->string('vat')->default('N\A');
            table->string('created_by')->nullable();
            table->string('updated_by')->nullable();
            table->text('brief');
            table->text('remarks');
            table->text('steps');
            table->text('clothing');
            table->string('rest_room');
            table->string('brphotographyief');
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
        Schema::dropIfExists('attractions');
    }
}
