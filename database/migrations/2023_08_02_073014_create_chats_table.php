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
        Schema::create('chats', function (Blueprint $table) {
            $table->id('id_chat');
            $table->string('pesan');
            $table->date('tgl_chat');
            $table->unsignedBigInteger('id_mentor');
            $table->unsignedBigInteger('id_pengguna');
            $table->timestamps();

            $table->foreign('id_mentor')->references('id_mentor')->on('mentors');
            $table->foreign('id_pengguna')->references('id_pengguna')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
