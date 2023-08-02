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
        Schema::create('materis', function (Blueprint $table) {
            $table->id('id_materi');
            $table->string('judul');
            $table->enum('kategori', ['Web Development', 'Bahasa Pemrograman', 'Data Science']); 
            $table->text('konten');
            $table->datetime('waktu_dibuat');
            $table->unsignedBigInteger('id_mentor');
            $table->timestamps();

            $table->foreign('id_mentor')->references('id_mentor')->on('mentors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
