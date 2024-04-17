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
        Schema::create('attribute_option_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("product_id");
            $table->bigInteger("attribute_option_id");
            $table->boolean("show_order");
            $table->bigInteger("creator_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attribute_option_products');
    }
};
