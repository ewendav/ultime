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
        Schema::create('sous_collections', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->unsignedBigInteger("collection_id");
            
            $table->foreign("collection_id")->references("id")->on("collections");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_collections');
    }
};
