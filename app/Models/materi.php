<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_materi';
    protected $fillable = ['judul', 'kategori', 'konten', 'waktu_dibuat', 'id_mentor'];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'id_mentor');
    }
}
