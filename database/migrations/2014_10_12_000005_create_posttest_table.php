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
        Schema::create('posttest', function (Blueprint $table) {
            $table->id();
            $table->longText('pertanyaan')->nullable();
            $table->longText('a')->nullable();
            $table->longText('b')->nullable();
            $table->longText('c')->nullable();
            $table->longText('d')->nullable();
            $table->longText('e')->nullable();
            $table->enum('kunci',['a','b', 'c', 'd', 'e'])->nullable();
            $table->unsignedBigInteger('id_materi')->nullable();
            $table->timestamps();
            $table->foreign('id_materi')->references('id')->on('materi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posttest');
    }
};
