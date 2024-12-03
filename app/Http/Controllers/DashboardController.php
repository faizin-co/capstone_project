<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Screening;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil jumlah pasien dan screening
        $jumlahPasien = Pasien::count();
        $jumlahScreening = Screening::count();
        $jumlahUser = User::count();

        // Mengambil data kunjungan berdasarkan tanggal
        $kunjunganData = Screening::select(
                DB::raw('DATE(tanggal) as date'),
                DB::raw('count(*) as count')
            )
            ->groupBy(DB::raw('DATE(tanggal)'))
            ->orderBy(DB::raw('DATE(tanggal)'), 'desc')
            ->limit(30)  // menampilkan 30 hari terakhir
            ->get();

        // Menyiapkan data untuk view
        // Pluck untuk mengubah data menjadi array yang dapat digunakan dalam grafik
        $labels = $kunjunganData->pluck('date')->toArray();  // Ambil tanggal
        $data = $kunjunganData->pluck('count')->toArray();   // Ambil jumlah kunjungan

        // Kirim data ke view
        return view('dashboard', compact('jumlahPasien', 'jumlahScreening', 'jumlahUser', 'labels', 'data'));
    }

}
