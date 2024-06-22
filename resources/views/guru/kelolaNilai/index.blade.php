@extends('layout.mainGuru')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Laporan Nilai</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
          <li class="breadcrumb-item active">Laporan Nilai</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="card">
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Materi</th>
            <th>Nilai</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data)
            <tr>
              <td>{{ $data->id }}</td>
              <td>{{ $data->user->name}}</td>
              <td>{{ $data->materi->mapel->mapel }}</td>
              <td>{{ $data->materi->nama_materi}}</td>
              <td>{{ $data->nilai}}</td>
              <td>
                  <form action="/laporan/{{ $data->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                      @method('DELETE')
                      @csrf
                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                  </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
