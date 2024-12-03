@extends('layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
          <div class="card">
          <div class="card-header">
                <h3 class="card-title">Tentang Kami</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="{{route('about.add')}}" class="btn btn-primary">Tambah Data</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Tentang</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Maps</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <td>{{$item->nama}}</td>
                      <td>{{$item->tentang}}</td>
                      <td>{{$item->visi}}</td>
                      <td>{{$item->misi}}</td>
                      <td>{{$item->alamat}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->telepon}}</td>
                      <td>{{$item->maps}}</td>
                      <td>
                        <div class="btn-group">
                        <button type="button" class="btn btn-info">Action</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                          <a class="dropdown-item" href="{{route('about.edit',$item->id)}}">Edit</a>
                          <a class="dropdown-item" href="{{route('about.delete',$item->id)}}">Delete</a>
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
