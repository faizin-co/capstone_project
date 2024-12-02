<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Screening extends Model
{
    protected $table = "screening";
    protected $fillable = [
        'id_pasien',
        'tanggal',
        'berat_badan',
        'tinggi_badan',
        'keluhan',
        'riwayat_penyakit',
        'riwayat_alergi',
        'suhu',
        'tekanan_darah',
        'gula_darah',
        'saran'
    ];

    public function get_all() {
        // Join tabel screening dengan m_pasien
        $data = DB::table('screening')
            ->join('m_pasien', 'screening.id_pasien', '=', 'm_pasien.id')
            ->select('screening.*', 'm_pasien.pas_name')
            ->get();

        return $data;
    }
    public function get_all_byid($id) {
        // Join tabel screening dengan m_pasien
        $data = DB::table('screening')
            ->join('m_pasien', 'screening.id_pasien', '=', 'm_pasien.id')
            ->select('screening.*', 'm_pasien.*')
            ->where('screening.id',$id)
            ->first();

        return $data;
    }

}
