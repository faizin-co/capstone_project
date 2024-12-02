<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{   protected $table = "m_pasien";
    protected $fillable = [
        'pas_name',
        'pas_dob',
        'pas_gen',
        'pas_wali',
        'pas_alamat',
        'pas_hp'
    ];
}
