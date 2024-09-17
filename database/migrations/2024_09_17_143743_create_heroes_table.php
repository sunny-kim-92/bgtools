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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('armor')->nullable();
            $table->string('text')->nullable();
            $table->string('image')->nullable();
            $table->string('crop_image')->nullable();
            $table->string('image_gold')->nullable();
            $table->boolean('solos_only')->default(false);
            $table->boolean('duos_only')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};
