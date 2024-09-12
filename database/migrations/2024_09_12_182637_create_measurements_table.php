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
        Schema::create('measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();
            $table->integer('weight');
            $table->integer('body_fat');
            $table->integer('muscle_mass');
            $table->integer('water');
            $table->integer('visceral_fat');
            $table->integer('age');
            $table->integer('basal_metabolism');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measurement');
    }
};
