<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;


class PasienController extends Controller
{
    public function index()
    {
        $data= Pasien::all();
        return view('pasien.index',compact('data'));
    }
    public function save(Request $request)
    {
        $request->validate([
            'pas_name' => 'required|string|max:255',
            'pas_dob' => 'required|date',
            'pas_wali' => 'required|string|max:255',
            'pas_gen' => 'required|string|max:255',
            'pas_alamat' => 'required|string|max:255',
            'pas_hp' => 'required|string|max:15'
        ]);

        // Menyimpan data pasien baru
        $pasien = Pasien::create($request->all());
        return Redirect::route('pasien.index');
    }
    public function add()
    {
        return view('pasien.add');
    }
    public function delete($id)
    {
        $data= Pasien::find($id);
        $data->delete();
        return Redirect::route('pasien.index');

    }

    public function edit($id)
    {
        $data= Pasien::find($id);
        return view('pasien.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        // Validasi data dari request
        $request->validate([
            'pas_name' => 'required|string|max:255',
            'pas_dob' => 'required|date',
            'pas_wali' => 'required|string|max:255',
            'pas_gen' => 'required|string|max:255',
            'pas_alamat' => 'required|string|max:255',
            'pas_hp' => 'required|string|max:15'
        ]);

        // Cari data pasien berdasarkan ID
        $pasien = Pasien::find($id);

        if (!$pasien) {
            return redirect()->route('pasien.index')->with('error', 'Pasien tidak ditemukan.');
        }

        // Update data pasien
        $pasien->update($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui.');
    }

}
