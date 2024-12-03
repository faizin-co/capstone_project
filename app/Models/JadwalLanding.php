<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalLanding extends Model
{
    protected $table = "m_jadwal";  // Pastikan nama tabelnya benar
    protected $fillable = [
        'hari',
        'jam_mulai',
        'jam_sampai',
        'status'
    ];
}
