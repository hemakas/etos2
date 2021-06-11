<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcursionBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excursion_bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sector');

            $table->unsignedBigInteger('voucher_num');
            $table->foreign('voucher_num')->references('id')
                ->on('voucher_numbers')
                ->onDelete('cascade');

            $table->string('bfn_num');

            $table->unsignedBigInteger('excursion_id');
            $table->foreign('excursion_id')->references('id')
                ->on('excursions')
                ->onDelete('cascade');

            $table->unsignedBigInteger('pax_range_id');
            $table->foreign('pax_range_id')->references('id')
                ->on('pax_ranges')
                ->onDelete('cascade');

            $table->unsignedBigInteger('supplier');
            $table->foreign('supplier')->references('id')
                ->on('suppliers')
                ->onDelete('cascade');

            $table->string('date');
            $table->string('days');

            $table->unsignedBigInteger('currency');
            $table->foreign('currency')->references('id')
                ->on('currencies')
                ->onDelete('cascade');

            $table->string('advance_taken_by')->nullable();
            $table->float('advance_amount', 8, 2)->default(0.0);
            $table->string('confirmation_by')->nullable();
            $table->string('contact_on')->nullable();
            $table->string('no_of_pax');
            $table->string('cost');

            $table->string('tax');
            $table->tinyInteger('status');
            $table->string('confirmed_by')->nullable();
            $table->integer('adult')->default(0);
            $table->integer('child')->default(0);

            $table->unsignedBigInteger('guide_id');
            $table->foreign('guide_id')->references('id')
                ->on('guides')
                ->onDelete('cascade');

            $table->integer('no_of_guide')->default(0);
            $table->string('activity')->nullable();
            $table->tinyInteger('is_amended')->default(0);
            $table->tinyInteger('amendment_num')->default(0);
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('excursion_bookings');
    }
}
