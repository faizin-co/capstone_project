<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutLanding extends Model
{
    protected $table = "about"; // Nama tabel yang sesuai
    protected $fillable = [
        'nama', 'tentang', 'visi', 'misi', 'alamat', 'email', 'telepon', 'maps'
    ];
}
