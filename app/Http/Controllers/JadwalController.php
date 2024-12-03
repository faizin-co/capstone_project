<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class JadwalController extends Controller
{
    public function index()
    {
        $data= Jadwal::all();
        return view('jadwal.index',compact('data'));
    }
    public function save(Request $request)
    {
        $request->validate([
            'hari' => 'required|string|max:255',
            'jam_mulai' => 'required|string|max:255',
            'jam_sampai' => 'required|string|max:255',
            'status' => 'required|string|max:255'
        ]);

        // Menyimpan data jadwal baru
        $jadwal = Jadwal::create($request->all());
        return Redirect::route('jadwal.index');
    }
    public function add()
    {
        return view('jadwal.add');
    }
    public function delete($id)
    {
        $data= Jadwal::find($id);
        $data->delete();
        return Redirect::route('jadwal.index');

    }

    public function edit($id)
    {
        $data= Jadwal::find($id);
        return view('jadwal.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        // Validasi data dari request
        $request->validate([
            'hari' => 'required|string|max:255',
            'jam_mulai' => 'required|string|max:255',
            'jam_sampai' => 'required|string|max:255',
            'status' => 'required|string|max:255'
        ]);

        // Cari data jadwal berdasarkan ID
        $jadwal = Jadwal::find($id);

        if (!$jadwal) {
            return redirect()->route('jadwal.index')->with('error', 'jadwal tidak ditemukan.');
        }

        // Update data jadwal
        $jadwal->update($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('jadwal.index')->with('success', 'Data jadwal berhasil diperbarui.');
    }
}
