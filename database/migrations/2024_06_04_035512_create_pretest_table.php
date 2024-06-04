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
        Schema::create('pretest', function (Blueprint $table) {
            $table->id();
            $table->string('jawaban')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->unsignedBigInteger('id_mapel')->nullable();
            $table->unsignedBigInteger('id_feedback')->nullable();
            // $table->foreign('id_kelurahan')->references('id')->on('kelurahans')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pretest');
    }
};
