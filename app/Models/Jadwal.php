<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = "m_jadwal";
    protected $fillable = [
        'hari',
        'jam_mulai',
        'jam_sampai',
        'status'
    ];
}
