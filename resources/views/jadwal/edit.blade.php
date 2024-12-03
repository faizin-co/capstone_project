@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Jadwal Posyandu</h3>
                    </div>
                    <form action="{{route('jadwal.update',$data->id)}}" method="post">
                        @method('put')
                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="Hari">Hari</label>
                          <input type="text"  name="hari" class="form-control" id="Hari" placeholder="Hari" value="{{ $data->hari }}">
                        </div>
                        <div class="form-group">
                            <label for="JamMulai">Jam Mulai</label>
                            <input type="text"  name="jam_mulai" class="form-control" id="Jam Mulai" placeholder="Jam Mulai" value="{{ $data->jam_mulai }}">
                          </div>
                          <div class="form-group">
                            <label for="JamSampai">Jam Sampai</label>
                            <input type="text"  name="jam_sampai" class="form-control" id="Jam Sampaii" placeholder="Jam Sampai" value="{{ $data->jam_sampai }}">
                          </div>
                        <div class="form-group">
                            <label for="Status">Status</label>
                            <input type="text" name="status" class="form-control" id="Status" placeholder="Status" value="{{ $data->status }}">
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
