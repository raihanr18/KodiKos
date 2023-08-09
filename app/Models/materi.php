<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Materi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_materi';
    protected $fillable = ['judul', 'kategori', 'konten', 'waktu_dibuat'];

    public function mentor()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->id_mentor = Auth::id(); 
        });
    }
}
