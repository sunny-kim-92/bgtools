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
        Schema::create('minions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedBigInteger('class_id')->nullable();
            $table->integer('attack');
            $table->integer('health');
            $table->integer('tier')->nullable();
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
        Schema::dropIfExists('minions');
    }
};
