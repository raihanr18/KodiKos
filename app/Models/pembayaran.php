<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $primaryKey = 'kode_pembayaran';
    protected $fillable = ['info_pembayaran', 'tgl_aktivasi', 'tgl_kadaluarsa'];

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
}
