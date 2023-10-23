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
            $table->unsignedBigInteger("collection_id");
            $table->unsignedBigInteger("sous_collection_id")->nullable(true);
            $table->unsignedBigInteger("sous_categorie_id")->nullable(true);
            $table->string("name");
            $table->text("description");
            $table->string("image");
            $table->integer("price");
            $table->boolean("active");
            $table->boolean("size")->nullable(true);

            $table->unsignedBigInteger("variante")->nullable(true);

            $table->foreign("sous_categorie_id")->references("id")->on("sous_categories");
            $table->foreign("collection_id")->references("id")->on("collections");
            $table->foreign("sous_collection_id")->references("id")->on("sous_collections");

            $table->foreign("variante")->references("id")->on("variantes");
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
