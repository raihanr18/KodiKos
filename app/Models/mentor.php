<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mentor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mentor';
    protected $fillable = ['nama_mentor', 'email', 'foto_profil', 'password', 'id_jadwal', 'id_admin'];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'id_mentor');
    }

    public function materis()
    {
        return $this->hasMany(Materi::class, 'id_mentor');
    }
}
