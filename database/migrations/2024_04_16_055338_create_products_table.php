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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->string("intro");
            $table->string("intro");
            $table->fullText("content");
            $table->enum("state_enum", ['DRAFT','PENDING','APPROVED','REJECTED']);
            $table->bigInteger("view_count");
            $table->bigInteger("order_count");
            $table->boolean("is_active");
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
        Schema::dropIfExists('products');
    }
};
