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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'user_id')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId(column: 'product_id')->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId(column: 'variation_id')->constrained('product_variants')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('quantity')->default(1);
            $table->timestamp('added_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
