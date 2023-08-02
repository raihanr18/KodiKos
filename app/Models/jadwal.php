<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['hari', 'jam', 'id_admin'];

    public function mentor()
    {
        return $this->hasOne(Mentor::class, 'id_jadwal');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}
