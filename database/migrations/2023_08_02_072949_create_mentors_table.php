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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id('id_mentor');
            $table->string('nama_mentor');
            $table->string('email');
            $table->string('foto_profil');
            $table->string('password');
            $table->unsignedBigInteger('id_jadwal');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();

            $table->foreign('id_jadwal')->references('id_jadwal')->on('jadwals');
            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
