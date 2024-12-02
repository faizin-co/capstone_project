@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
          <div class="card">
          <div class="card-header">
                <h3 class="card-title">Data Pasien</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('pasien.add')}}" class="btn btn-primary">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Wali</th>
                    <th>No HP</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$item->pas_name}}</td>
                      <td>{{$item->pas_gen}}</td>
                      <td>{{$item->pas_dob}}</td>
                      <td>{{$item->pas_alamat}}</td>
                      <td>{{$item->pas_wali}}</td>
                      <td>{{$item->pas_hp}}</td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="{{route('pasien.delete',$item->id)}}">Delete</a>
                        </div>
                      </div>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>
        </div>
    </div>
</section>
@endsection
