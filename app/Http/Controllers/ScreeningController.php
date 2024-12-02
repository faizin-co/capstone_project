<?php

namespace App\Http\Controllers;
use App\Models\Screening;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Http;


class ScreeningController extends Controller
{
    public function index()
    {
        $screening = new Screening();
        $data = $screening->get_all();
        return view('screening.index',compact('data'));
    }
    public function save(Request $request)
{
    // Validasi input
    // dd($request);
    $request->validate([
        'id_pasien' => 'required|integer',
        'tanggal' => 'required|date',
        'berat_badan' => 'required|numeric',
        'tinggi_badan' => 'required|numeric',
        'keluhan' => 'required|string|max:1000',
        'riwayat_penyakit' => 'nullable|string|max:1000',
        'riwayat_alergi' => 'nullable|string|max:1000',
        'suhu' => 'required|numeric',
        'tekanan_darah' => 'required|string|max:20',
        'gula_darah' => 'required|numeric',
        'saran' => 'nullable|string|max:1000'
    ]);

        // Menyimpan data pasien baru
        $screening = Screening::create($request->all());
        return Redirect::route('screening.index');
    }
    public function add()
    {
        $data_pasien= Pasien::all();
        return view('screening.add',compact('data_pasien'));

    }
    public function delete($id)
    {
        $data= Screening::find($id);
        $data->delete();
        return Redirect::route('screening.index');

    }

    public function edit($id)
    {
        $data_pasien= Pasien::all();
        $data= Screening::find($id);
        return view('screening.edit',compact('data','data_pasien'));
    }
    public function update(Request $request, $id)
    {
        // Validasi data dari request
        // dd($request);
        $request->validate([
            'id_pasien' => 'required|integer',
            'tanggal' => 'required|date',
            'berat_badan' => 'required|numeric',
            'tinggi_badan' => 'required|numeric',
            'keluhan' => 'required|string|max:1000',
            'riwayat_penyakit' => 'nullable|string|max:1000',
            'riwayat_alergi' => 'nullable|string|max:1000',
            'suhu' => 'required|numeric',
            'tekanan_darah' => 'required|string|max:20',
            'gula_darah' => 'required|numeric',
            'saran' => 'nullable|string|max:1000'
        ]);

        // Cari data pasien berdasarkan ID
        $screening = Screening::find($id);

        if (!$screening) {
            return redirect()->route('screening.index')->with('error', 'Screening tidak ditemukan.');
        }

        // Update data pasien
        $screening->update($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('screening.index')->with('success', 'Data Screening berhasil diperbarui.');
    }

    public function kirim($id){
    // Ambil data screening berdasarkan $id
    $screening = new Screening();
    $data = $screening->get_all_byid($id);

    if (!$data) {
        return response()->json(['message' => 'Screening data not found'], 404);
    }
    // dd($data->pas_hp);
    // Dapatkan nomor HP pasien dari tabel pasien
    if (!$data->pas_hp) {
        return response()->json(['message' => 'Patient phone number not found'], 404);
    }

    // Format hasil screening
    $screeningResult = "Hasil Screening:\n";
    $screeningResult .= "Nama: " . $data->pas_name . "\n";
    $screeningResult .= "Tanggal: " . $data->tanggal . "\n";
    $screeningResult .= "Berat Badan: " . $data->berat_badan . " kg\n";
    $screeningResult .= "Tinggi Badan: " . $data->tinggi_badan . " cm\n";
    $screeningResult .= "Keluhan: " . $data->keluhan . "\n";
    $screeningResult .= "Riwayat Pasien: " . $data->riwayat_penyakit . "\n";
    $screeningResult .= "Riwayat Alergi: " . $data->riwayat_alergi . "\n";
    $screeningResult .= "Suhu: " . $data->suhu . "°C\n";
    $screeningResult .= "Tekanan Darah: " . $data->tekanan_darah . " mmHg\n";
    $screeningResult .= "Gula Darah: " . $data->gula_darah . " mg/dL\n";
    $screeningResult .= "Saran: " . $data->saran . "\n";

    // Konfigurasi API
    $apiKey = 'ip6qa7w3ia1sOr5i6x0X8KsgpakyTu';
    $sender = '6287821626413';
    $number = $data->pas_hp;
    $message = "Hello " . $data->pas_name . ",\n\n" . $screeningResult;

    $url = "https://config.sibunda.id/send-message";

    // Kirim permintaan ke API
    $response = Http::get($url, [
        'api_key' => $apiKey,
        'sender' => $sender,
        'number' => $number,
        'message' => $message,
    ]);

    if ($response->successful()) {
        session()->flash('success', 'Message sent successfully!');
    } else {
        session()->flash('error', 'Failed to send message');
    }

    return redirect()->back();
}

}
