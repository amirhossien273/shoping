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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("unique_id");
            $table->integer("final_price");
            $table->integer("total_price");
            $table->integer("total_discount_price");
            $table->integer("total_count");
            $table->integer("shipping_price");
            $table->timestamp("invoiced_at");
            $table->timestamp("shipped_at");
            $table->enum("shipment", ['POST','PPT']);
            $table->string("post_tracking_code");
            $table->longText("post_response");
            $table->longText("post_param");
            $table->boolean("is_dropshipp");
            $table->text("note");
            $table->text("note_manage");
            $table->enum("state_enum", ['PENDING','CONFIRMED','REORDERED','CANCELLED','INITIALIZED']);
            $table->bigInteger("reordered_id");
            $table->longText("address");
            $table->longText("voucher");
            $table->integer("voucher_price");
            $table->bigInteger("voucher_id");
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
        Schema::dropIfExists('orders');
    }
};
