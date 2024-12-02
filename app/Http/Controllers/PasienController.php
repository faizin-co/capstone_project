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
}
