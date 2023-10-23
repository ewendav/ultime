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
        Schema::create('welcomes', function (Blueprint $table) {
            $table->text("description1");
            $table->text("sous_description1");
            $table->text("description2");
            $table->text("sous_description2");
            $table->text("description3");
            $table->text("sous_description3");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('welcomes');
    }
};
