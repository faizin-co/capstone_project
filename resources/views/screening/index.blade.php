@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
                @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
          <div class="card">
          <div class="card-header">
                <h3 class="card-title">Data Screening</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('screening.add')}}" class="btn btn-primary">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Pasien</th>
                    <th>Tanggal</th>
                    <th>Berat Badan</th>
                    <th>Tinggi Badan</th>
                    <th>Keluhan</th>
                    <th>Riwayat Penyakit</th>
                    <th>Riwayat Alergi</th>
                    <th>Suhu</th>
                    <th>Tekanan Darah</th>
                    <th>Gula Darah</th>
                    <th>Saran</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$item->pas_name}}</td>
                      <td>{{$item->tanggal}}</td>
                      <td>{{$item->berat_badan}}</td>
                      <td>{{$item->tinggi_badan}}</td>
                      <td>{{$item->keluhan}}</td>
                      <td>{{$item->riwayat_penyakit}}</td>
                      <td>{{$item->riwayat_alergi}}</td>
                      <td>{{$item->suhu}}</td>
                      <td>{{$item->tekanan_darah}}</td>
                      <td>{{$item->gula_darah}}</td>
                      <td>{{$item->saran}}</td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="{{route('screening.edit',$item->id)}}">Edit</a>
                          <a class="dropdown-item" href="{{route('screening.delete',$item->id)}}">Delete</a>
                          <a class="dropdown-item" href="{{route('screening.kirim',$item->id)}}">Kirim</a>
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
