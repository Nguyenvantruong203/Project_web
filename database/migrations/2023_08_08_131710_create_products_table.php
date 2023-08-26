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
            $table->string("product_name");
            $table->unsignedBigInteger("category_id");
            $table->foreign("category_id")->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->float("price");
            $table->float("quantity");
            $table->string("image");
            $table->string("size");
            $table->string("description");
            $table->unsignedBigInteger("color_id");
            $table->foreign("color_id")->references('id')->on('colors')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("provider_id");
            $table->foreign("provider_id")->references('id')->on('providers')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
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
