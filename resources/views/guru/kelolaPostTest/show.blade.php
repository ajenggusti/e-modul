@extends('layout.mainGuru')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Detail Post Test</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="/kelPosttest">Kelola Post Test</a></li>
          <li class="breadcrumb-item active">Detail Post Test</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{ $posttest->id }}</td>
                </tr>
                <tr>
                    <th>Pertanyaan</th>
                    <td>{{ $posttest->pertanyaan }}</td>
                </tr>
                <tr>
                    <th>Opsi A</th>
                    <td>{{ $posttest->a }}</td>
                </tr>
                <tr>
                    <th>Opsi B</th>
                    <td>{{ $posttest->b }}</td>
                </tr>
                <tr>
                    <th>Opsi C</th>
                    <td>{{ $posttest->c }}</td>
                </tr>
                <tr>
                    <th>Opsi D</th>
                    <td>{{ $posttest->d }}</td>
                </tr>
                <tr>
                    <th>Opsi E</th>
                    <td>{{ $posttest->e }}</td>
                </tr>
                <tr>
                    <th>Kunci Jawaban</th>
                    <td>{{ $posttest->kunci }}</td>
                </tr>
                <tr>
                    <th>Materi</th>
                    <td>{{ $posttest->materi->nama_materi }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
