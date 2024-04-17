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
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("order_id");
            $table->bigInteger("product_item_id");
            $table->integer("seller_quantity");
            $table->integer("consign_quantity");
            $table->integer("requested_quantity");
            $table->integer("sent_quantity");
            $table->integer("approved_quantity");
            $table->integer("total_quantity");
            $table->enum("state_enum", ['PENDING','CONFIRMED','SENT_TO_ELANZA','SHIPPED_BY_SELLER']);
            $table->longText("penalties");
            $table->string("product_title");
            $table->integer("product_unit_old_price");
            $table->integer("product_unit_price");
            $table->integer("product_total_price");
            $table->integer("product_total_discount");
            $table->string("product_seller_title");
            $table->string("product_guarantee_title");
            $table->longText("product_variations");
            $table->longText("product_images");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
