@extends('layout.mainGuru')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Edit User</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{ route('kelUser.index') }}">Kelola User</a></li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('kelUser.update', $user->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ $user->nama }}" required>
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
  </div>

  <div class="form-group">
    <label for="level">Level</label>
    <select name="level" class="form-control" required>
      <option value="guru" {{ $user->level == 'guru' ? 'selected' : '' }}>Guru</option>
      <option value="siswa" {{ $user->level == 'siswa' ? 'selected' : '' }}>Siswa</option>
    </select>
  </div>

  <div class="form-group">
    <label for="absen">Absen</label>
    <input type="text" name="absen" class="form-control" value="{{ $user->absen }}" required>
  </div>

  <div class="form-group">
    <label for="nip">NIP</label>
    <input type="text" name="nip" class="form-control" value="{{ $user->nip }}" required>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
