@extends('layout.mainGuru')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Post Test</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/kelPosttest">Kelola Post Test</a></li>
                    <li class="breadcrumb-item active">Edit Soal Post Test</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form action="{{ route('kelPosttest.update', $posttest->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="materi">Pilih Materi</label>
            <select id="materi" name="materi" class="form-control">
                <option value="">-- Pilih Materi --</option>
                @foreach ($materi as $item)
                    <option value="{{ $item->id }}" {{ $posttest->id_materi == $item->id ? 'selected' : '' }}>
                        {{ $item->nama_materi }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="question">Pertanyaan</label>
            <input type="text" name="question" class="form-control" value="{{ $posttest->pertanyaan }}" placeholder="Masukkan pertanyaan">
        </div>
        <div class="form-group">
            <label for="option_a">Opsi A</label>
            <input type="text" name="a" class="form-control" value="{{ $posttest->a }}" placeholder="Masukkan opsi A">
        </div>
        <div class="form-group">
            <label for="option_b">Opsi B</label>
            <input type="text" name="b" class="form-control" value="{{ $posttest->b }}" placeholder="Masukkan opsi B">
        </div>
        <div class="form-group">
            <label for="option_c">Opsi C</label>
            <input type="text" name="c" class="form-control" value="{{ $posttest->c }}" placeholder="Masukkan opsi C">
        </div>
        <div class="form-group">
            <label for="option_d">Opsi D</label>
            <input type="text" name="d" class="form-control" value="{{ $posttest->d }}" placeholder="Masukkan opsi D">
        </div>
        <div class="form-group">
            <label for="option_e">Opsi E</label>
            <input type="text" name="e" class="form-control" value="{{ $posttest->e }}" placeholder="Masukkan opsi E">
        </div>
        <div class="form-group">
            <label for="answer_key">Kunci Jawaban</label>
            <select name="kunci" class="form-control">
                <option value="">-- Pilih Kunci Jawaban --</option>
                <option value="a" {{ $posttest->kunci == 'a' ? 'selected' : '' }}>A</option>
                <option value="b" {{ $posttest->kunci == 'b' ? 'selected' : '' }}>B</option>
                <option value="c" {{ $posttest->kunci == 'c' ? 'selected' : '' }}>C</option>
                <option value="d" {{ $posttest->kunci == 'd' ? 'selected' : '' }}>D</option>
                <option value="e" {{ $posttest->kunci == 'e' ? 'selected' : '' }}>E</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
