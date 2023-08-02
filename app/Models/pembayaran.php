<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_pembayaran';
    protected $fillable = ['info_pembayaran', 'tgl_aktivasi', 'tgl_kadaluarsa', 'id_pengguna'];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
