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
        Schema::create('variation_option_product_items', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->bigInteger("variation_id");
            $table->boolean("is_active");
            $table->integer("show_order");
            $table->bigInteger("creator_id");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_option_product_items');
    }
};
