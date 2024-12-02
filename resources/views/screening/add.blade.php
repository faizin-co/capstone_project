@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Screening Pasien</h3>
                    </div>
                    <form action="{{route('screening.save')}}" method="post">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label>Pasien</label>
                            <select class="form-control select2" name="id_pasien"  style="width: 100%;">
                              <option selected="selected">Pilih Pasien</option>
                              @foreach ($data_pasien as $item)
                              <option value="{{ $item->id }}">{{ $item->pas_name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="reservationdate">Tanggal</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" name="tanggal"  class="form-control input"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="beratBadan">Berat Badan</label>
                            <input type="text" name="berat_badan" class="form-control" id="BeratBadan" placeholder="Berat Badan">
                          </div>
                          <div class="form-group">
                            <label for="Tinggi Badan">Tinggi Badan</label>
                            <input type="text" name="tinggi_badan" class="form-control" id="TinggiBadan" placeholder="Tinggi Badan">
                          </div>
                          <div class="form-group">
                            <label for="Keluhan">Keluhan</label>
                            <input type="text" name="keluhan" class="form-control" id="Keluhan" placeholder="Keluhan">
                          </div>
                          <div class="form-group">
                            <label for="RiwayatPenyakit">Riwayat Penyakit</label>
                            <input type="text" name="riwayat_penyakit" class="form-control" id="RiwayatPenyakit" placeholder="Riwayat Penyakit">
                          </div>
                          <div class="form-group">
                            <label for="RiwayatAlergi">Riwayat Alergi</label>
                            <input type="text" name="riwayat_alergi" class="form-control" id="RiwayatAlergi" placeholder="Riwayat Alergi">
                          </div>
                          <div class="form-group">
                            <label for="Suhu">Suhu</label>
                            <input type="text" name="suhu" class="form-control" id="Suhu" placeholder="Suhu">
                          </div>
                          <div class="form-group">
                            <label for="TekananDarah">Tekanan Darah</label>
                            <input type="text" name="tekanan_darah" class="form-control" id="TekananDarah" placeholder="Tekanan Darah">
                          </div>
                          <div class="form-group">
                            <label for="GulaDarah">Gula Darah</label>
                            <input type="text" name="gula_darah" class="form-control" id="GUlaDarah" placeholder="Gula Darah">
                          </div>
                        <div class="form-group">
                            <label for="Saran">Saran</label>
                            <textarea class="form-control"  id="Saran" name="saran" rows="3" placeholder="Masukkan Saran"></textarea>
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                        <!-- Tombol Cancel -->
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                    </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection
