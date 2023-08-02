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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->string('kode_pembayaran')->primary();
            $table->string('info_pembayaran');
            $table->date('tgl_aktivasi');
            $table->integer('tgl_kadaluarsa');
            $table->unsignedBigInteger('id_pengguna');
            $table->timestamps();

            $table->foreign('id_pengguna')->references('id_pengguna')->on('penggunas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
