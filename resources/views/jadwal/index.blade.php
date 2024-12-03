@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
          <div class="card">
          <div class="card-header">
                <h3 class="card-title">Jadwal Posyandu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('jadwal.add')}}" class="btn btn-primary">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Sampai</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$item->hari}}</td>
                      <td>{{$item->jam_mulai}}</td>
                      <td>{{$item->jam_sampai}}</td>
                      <td>{{$item->status}}</td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="{{route('jadwal.edit',$item->id)}}">Edit</a>
                          <a class="dropdown-item" href="{{route('jadwal.delete',$item->id)}}">Delete</a>
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
