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
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade')->unique();
            $table->enum('payment_method', ['credit_card', 'paypal', 'bank_transfer']);
            $table->enum('payment_type', ['full', 'partial']);
            $table->integer('payment_total_amount');
            $table->integer('payment_dp_amount')->nullable();
            $table->integer('payment_dp_paid')->nullable();
            $table->enum('payment_status', ['pending', 'completed', 'failed']);
            $table->datetime('paid_at')->nullable();
            $table->timestamps();
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
