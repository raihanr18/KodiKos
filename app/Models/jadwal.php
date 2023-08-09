<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['hari', 'jam', 'id_mentor'];

    public function admin()
    {
        return $this->belongsTo(Mentor::class);
    }
}
