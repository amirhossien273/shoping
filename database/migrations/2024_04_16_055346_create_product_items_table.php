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
        Schema::create('product_items', function (Blueprint $table) {
            $table->id();
            $table->string("seller_sku");
            $table->enum("state_enum", ['DRAFT','PENDING','APPROVED','REJECTED']);
            $table->string("reject_reason");
            $table->integer("price");
            $table->integer("old_price");
            $table->integer("quantity");
            $table->integer("consign_quantity");
            $table->integer("total_quantity");
            $table->integer("shipping_days");
            $table->integer("max_basket_limit");
            $table->boolean("is_available");
            $table->boolean("is_active");
            $table->boolean("is_on_sale");
            $table->bigInteger("show_order");
            $table->bigInteger("product_id");
            $table->bigInteger("product_id");
            $table->bigInteger("guarantee_id");
            $table->bigInteger("seller_id");
            $table->bigInteger("creator_id");
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
        Schema::dropIfExists('product_items');
    }
};
