<?php

namespace App\Http\Controllers;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function index()
    {
        $data= About::all();
        return view('about.index',compact('data'));
    }
    public function save(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tentang' => 'required|string|max:1000',
            'visi' => 'required|string|max:1000',
            'misi' => 'required|string|max:1000',
            'alamat' => 'required|string|max:1000',
            'email' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'maps' => 'required|string|max:1000'
        ]);

        // Menyimpan data about baru
        $about = About::create($request->all());
        return Redirect::route('about.index');
    }
    public function add()
    {
        return view('about.add');
    }
    public function delete($id)
    {
        $data= About::find($id);
        $data->delete();
        return Redirect::route('about.index');

    }

    public function edit($id)
    {
        $data= About::find($id);
        return view('about.edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        // Validasi data dari request
        $request->validate([
            'nama' => 'required|string|max:255',
            'tentang' => 'required|string|max:1000',
            'visi' => 'required|string|max:1000',
            'misi' => 'required|string|max:1000',
            'alamat' => 'required|string|max:1000',
            'email' => 'required|string|max:255',
            'telepon' => 'required|string|max:255',
            'maps' => 'required|string|max:1000'
        ]);

        // Cari data about berdasarkan ID
        $about = About::find($id);

        if (!$about) {
            return redirect()->route('about.index')->with('error', 'Data tidak ditemukan.');
        }

        // Update data about
        $about->update($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'Data  berhasil diperbarui.');
    }
}
