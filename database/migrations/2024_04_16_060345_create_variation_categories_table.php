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
        Schema::create('variation_categories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("variation_id");
            $table->bigInteger("category_id");
            $table->bigInteger("creator_id");
            $table->boolean("is_filterable");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variation_categories');
    }
};