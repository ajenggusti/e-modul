@extends('layout.mainGuru')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Kelola Test Akhir</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
          <li class="breadcrumb-item active">Kelola Test Akhir</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

@if (session('success') )
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<a href="/kelPosttest/create" class="btn btn-primary"> <i class="bi bi-plus-lg"></i> Tambah Data</a>
<br><br>
<div class="card">
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Pertanyaan</th>
            <th>Kunci</th>
            <th>Materi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datas as $data)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $data->pertanyaan }}</td>
              <td>{{ $data->kunci }}</td>
              <td>{{ $data->materi->nama_materi }}</td>
              <td>
                  <div class="action-buttons">
                      <a href="/kelPosttest/{{ $data->id }}/edit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Edit</a>
                      <a href="/kelPosttest/{{ $data->id }}" class="btn btn-primary"><i class="bi bi-eye"></i> Show</a>
                      <form action="/kelPosttest/{{ $data->id }}" method="POST" style="display:inline;">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="bi bi-trash"></i> Delete</button>
                      </form>
                  </div>
              </td>
            </tr>
          @endforeach
        </tfoot>
      </table>
    </div>
</div>
@endsection
