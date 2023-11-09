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
        Schema::create('products_tailles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("taille_id");
            $table->foreign("taille_id")->references("id")->on("tailles")->toArray();


            $table->unsignedBigInteger("product_id");
            $table->foreign("product_id")->references("id")->on("products")->toArray();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_tailles');
    }
};
