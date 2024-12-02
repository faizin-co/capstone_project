@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Master Pasien</h3>
                    </div>
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="IDPasien">ID Pasien</label>
                          <input type="pasien" class="form-control" id="IDPasien" placeholder="Id Pasien">
                        </div>
                        <div class="form-group">
                          <label for="Pasien">Nama Pasien</label>
                          <input type="pasien" class="form-control" id="Pasien" placeholder="Pasien">
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Laki-Laki</option>
                              <option>Laki-Laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="reservationdate">Tanggal Lahir</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Wali">Nama Wali</label>
                            <input type="wali" class="form-control" id="Wali" placeholder="Wali">
                          </div>
                          <div class="form-group">
                            <label for="No HP">No HP</label>
                            <input type="NoHP" class="form-control" id="NoHP" placeholder="No HP">
                          </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <textarea class="form-control" id="Alamat" name="alamat" rows="3" placeholder="Masukkan alamat"></textarea>
                        </div>                        
                        <div class="form-group">
                          <label for="exampleInputFile">Foto</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
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
