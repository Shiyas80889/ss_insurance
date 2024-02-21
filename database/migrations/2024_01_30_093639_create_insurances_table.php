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
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
            $table->string('make');
            $table->string('model');
            $table->string('fuel');
            $table->string('seating');
            $table->string('gvm_or_cc');
            $table->integer('manufacturing_year');
            $table->unsignedBigInteger('segment_id');
            $table->foreign('segment_id')->references('id')->on('segments')->onDelete('restrict');
            $table->unsignedBigInteger('coverage_id');
            $table->foreign('coverage_id')->references('id')->on('coverages')->onDelete('restrict');
            $table->string('od');
            $table->string('tp');
            $table->string('net_premium');
            $table->string('gst');
            $table->string('final_premium');
            $table->string('payment_status');
            $table->string('collected_prm');
            $table->string('policy_number');
            $table->date('risk_start_date');
            $table->unsignedBigInteger('ref_name_id');
            $table->foreign('ref_name_id')->references('id')->on('referances')->onDelete('restrict');
            $table->string('mobile_number');
            $table->unsignedBigInteger('issued_by_id');
            $table->foreign('issued_by_id')->references('id')->on('issuers')->onDelete('restrict');
            $table->string('issued_code');
            $table->string('email');
            $table->unsignedBigInteger('payment_mode_id');
            $table->foreign('payment_mode_id')->references('id')->on('paymentmodes')->onDelete('restrict');
            $table->date('date');
            $table->string('agent_commission');
            $table->string('payment_given_to_account');
            $table->string('company_payout');
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
