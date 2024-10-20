@extends('layout.mainGuru')
@section('content')
<link href="/style/kelIndex.css" rel="stylesheet">

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Kelola Materi</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
          <li class="breadcrumb-item active">Kelola Materi</li>
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

<a href="/kelMateri/create" class="btn btn-primary"> <i class="bi bi-plus-lg"></i> Tambah Data</a>
<br> <br>
<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>Nama Materi </th>
            <th>Gambar sampul </th>
            <th>Video Pembelajaran</th>
            <th>Link youtube</th>
            <th>File</th>
            <th>Action</th>
          </tr>
        </thead>
        
        <tbody>
          @foreach ($datas as $data)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $data->nama_materi }}</td>
              <td><img class="gambar-mapel" src="{{ asset('storage/' . $data->gambar) }}" alt="Nama Gambar"></td>
              {{-- <td><img class="gambar-mapel" src="{{ asset( $data->gambar) }}" alt="Nama Gambar"></td> --}}

              @php
                  // Mengubah URL YouTube biasa menjadi embed URL
                  $youtubeEmbedUrl = '';
                  if (preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/ ]{11})/i', $data->link_yt, $match)) {
                      $youtubeId = $match[1];
                      $youtubeEmbedUrl = 'https://www.youtube.com/embed/' . $youtubeId;
                  }
              @endphp
              <td>
                @if ($youtubeEmbedUrl)
                    <iframe width="100" height="80" src="{{ $youtubeEmbedUrl }}" frameborder="0" allowfullscreen></iframe>
                @else
                    link youtube tidak valid
                @endif
              </td>
              <td><a href="{{ $data->yt }}">{{ $data->yt }}</a></td>
              <td>
                <a href="{{ asset('storage/' . $data->file) }}" target="_blank">View File</a>
              </td>
              <td>
                  <div class="action-buttons">
                      <a href="/kelMateri/{{ $data->id }}/edit" class="btn btn-success"><i class="bi bi-pencil-square"></i> Edit</a>
                      <form action="/kelMateri/{{ $data->id }}" method="POST" style="display:inline;">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')"><i class="bi bi-trash"></i> Delete</button>
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
