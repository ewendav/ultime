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
        Schema::create('product_groups', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger("group_id");
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("taille")->nullable(true);
            $table->unsignedBigInteger("variante")->nullable(true);

            $table->foreign("group_id")->references("id")->on("groups");
            $table->foreign("product_id")->references("id")->on("products");
            $table->foreign("taille")->references("id")->on("tailles");
            $table->foreign("variante")->references("id")->on("variantes");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_groups');
    }
};
