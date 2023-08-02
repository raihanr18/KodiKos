<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_admin';
    protected $fillable = ['username', 'password'];

    public function mentors()
    {
        return $this->hasMany(Mentor::class, 'id_admin');
    }

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'id_admin');
    }
}
