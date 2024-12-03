@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Tentang Kami</h3>
                    </div>
                    <form action="{{route('about.save')}}" method="post">
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="Nama">Nama</label>
                          <input type="text"  name="nama" class="form-control" id="Nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="Tentang">Tentang</label>
                            <textarea class="form-control"  id="Tentang" name="tentang" rows="3" placeholder="Tentang"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Visi">Visi</label>
                            <textarea class="form-control"  id="Visi" name="visi" rows="3" placeholder="Visi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Misi">Misi</label>
                            <textarea class="form-control"  id="Misi" name="misi" rows="3" placeholder="Misi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <textarea class="form-control"  id="Alamat" name="alamat" rows="3" placeholder="Alamat"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Telepon">Telepon</label>
                            <input type="text"  name="telepon" class="form-control" id="Telepon" placeholder="Telepon">
                          </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text"  name="email" class="form-control" id="Email" placeholder="Email">
                          </div>
                        <div class="form-group">
                            <label for="Maps">Maps</label>
                            <textarea class="form-control"  id="Maps" name="maps" rows="3" placeholder="Maps"></textarea>
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