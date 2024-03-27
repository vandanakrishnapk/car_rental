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
    Schema::create('payments', function (Blueprint $table) {
        $table->id("payment_id");
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('car_id');
        $table->float('price');
        $table->string('payment_method');
        $table->string('status')->default("unpaid");
        $table->timestamp('paid_at')->nullable();
        $table->timestamps();
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('car_id')->references('car_id')->on('cars');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
