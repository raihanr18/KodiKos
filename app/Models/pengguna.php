<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengguna';
    protected $fillable = ['nama', 'tanggal_lahir', 'profesi', 'status_premium', 'email', 'password'];

    
}
