<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['nama', 'tanggal_lahir', 'profesi', 'status_premium', 'email', 'password'];

    public function chats()
    {
        return $this->hasMany(Chat::class, 'id_pengguna');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pengguna');
    }
}
