<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supplier')->nullable();
            $table->string('bfn_num')->nullable();

            $table->unsignedBigInteger('voucher_number_id');
            $table->foreign('voucher_number_id')->references('id')
                ->on('voucher_numbers')
                ->onDelete('cascade');

            $table->string('type')->nullable();
            $table->string('activity')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();

            $table->unsignedBigInteger('guide_id');
            $table->foreign('guide_id')->references('id')
                ->on('guides')
                ->onDelete('cascade');

            $table->tinyInteger('total_days')->default(0);
            $table->tinyInteger('pax_count')->default(0);

            $table->unsignedBigInteger('vehicle_type_id');
            $table->foreign('vehicle_type_id')->references('id')
                ->on('vehicle_types')
                ->onDelete('cascade');

            $table->tinyInteger('total_vehicles')->nullable();
            $table->tinyInteger('total_km')->nullable();
            $table->string('per_km_rate')->nullable();
            $table->string('batta')->nullable();
            $table->string('toll')->nullable();
            $table->string('tax')->nullable();
            $table->string('cost_with_tax')->nullable();
            $table->string('pickup_from')->nullable();

            $table->string('drop_to')->nullable();
            $table->string('pickup_at')->nullable();
            $table->string('drop_at')->nullable();
            $table->string('confirmation_by')->nullable();
            $table->string('contact_on')->nullable();
            $table->text('description')->nullable();

            $table->string('tr_remarks')->nullable();
            $table->string('agreed_rate')->nullable();
            $table->string('driver_details')->nullable();
            $table->string('supplier_details')->nullable();
            $table->string('milage')->nullable();
            $table->string('vehicle_no')->nullable();

            $table->string('water_bottles')->nullable();
            $table->string('parking')->nullable();
            $table->string('h_pass')->nullable();
            $table->string('total_milage')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('guide_name')->nullable();

            $table->integer('national_guide')->nullable();
            $table->string('guide_number')->nullable();
            $table->string('report_to')->nullable();
            $table->string('ap_contact')->nullable();
            $table->text('transport_day_plans')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->string('confirmed_by')->nullable();
                                   
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
        Schema::dropIfExists('transports');
    }
}
