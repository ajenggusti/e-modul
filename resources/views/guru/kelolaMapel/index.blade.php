@extends('layout.mainGuru')
@section('content')
<link href="/style/kelIndex.css" rel="stylesheet">
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Kelola Mata Pelajaran</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
          <li class="breadcrumb-item active">Kelola Mata Pelajaran</li>
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

<a href="/kelMapel/create" class="btn btn-primary"> <i class="bi bi-plus-lg"></i> Tambah Data</a>
<br><br>

<div class="card">
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Mata Pelajaran</th>
            <th>Guru</th>
            <th>Gambar Sampul</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data)
              <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->mapel }}</td>
                  <td>{{ $data->user->name }}</td>
                  <td><img class="gambar-mapel" src="{{ asset('storage/' . $data->gambar) }}" alt="Nama Gambar"></td>
                  <td>
                      <div class="action-buttons d-flex">
                          <a href="/kelMapel/{{ $data->id }}/edit" class="btn btn-success me-2"><i class="bi bi-pencil-square"></i> Edit</a>
                          <form action="/kelMapel/{{ $data->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                          </form>
                      </div>
                  </td>
              </tr>
          @endforeach
      </tbody>
      

      </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection
