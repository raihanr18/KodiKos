<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Jadwal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['hari', 'jam', 'id_mentor'];

    public function admin()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->id_mentor = Auth::id(); 
        });
    }
}
