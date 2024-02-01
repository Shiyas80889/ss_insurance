<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('insurances', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('reg_no');
            $table->string('company_id');
            $table->string('make');
            $table->string('model');
            $table->enum('fuel', ['petrol', 'diesel','ev']);
            $table->string('seating');
            $table->string('gvm_or_cc');
            $table->integer('manufacturing_year');
            $table->string('segment_id');
            $table->string('coverage_id');
            $table->string('od');
            $table->string('tp');
            $table->string('net_premium');
            $table->string('gst');
            $table->string('final_premium');
            $table->enum('payment_status', ['credit', 'paid']);
            $table->string('collected_prm');
            $table->string('policy_number');
            $table->dateTime('risk_start_date');
            $table->string('ref_name_id');
            $table->string('mobile_number');
            $table->string('issued_by_id');
            $table->string('issued_code');
            $table->string('email');
            $table->string('payment_mode_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurances');
    }
};
