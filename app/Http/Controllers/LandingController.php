<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalLanding;
use App\Models\AboutLanding;

class LandingController extends Controller
{
    public function index()
    {
        $data = JadwalLanding::all(); // Mengambil semua data dari model JadwalLanding
        $about = AboutLanding::first(); // Mengambil data pertama dari AboutLanding (jika hanya ada satu data)

        return view('landing.index', compact('data', 'about')); // Mengirim data ke view landing.index
    }
}
