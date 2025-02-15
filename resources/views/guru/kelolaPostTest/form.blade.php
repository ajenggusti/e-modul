@extends('layout.mainGuru')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Test Akhir</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="/kelPosttest">Kelola Test Akhir</a></li>
                    <li class="breadcrumb-item active">Tambah Soal Test Akhir</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <form action="{{ route('kelPosttest.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="materi">Pilih Materi</label>
            <select id="materi" name="materi" class="form-control">
                <option value="">-- Pilih Materi --</option>
                @foreach ($materis as $materi)
                    <option value="{{ $materi->id }}">{{ $materi->nama_materi }}</option>
                @endforeach
            </select>
        </div>
        <div id="questions-container">
            <div class="form-group">
                <label for="question">Pertanyaan</label>
                <input type="text" name="questions[0][question]" class="form-control" placeholder="Masukkan pertanyaan">
            </div>
            <div class="form-group">
                <label for="option_a">Opsi A</label>
                <input type="text" name="questions[0][a]" class="form-control" placeholder="Masukkan opsi A">
            </div>
            <div class="form-group">
                <label for="option_b">Opsi B</label>
                <input type="text" name="questions[0][b]" class="form-control" placeholder="Masukkan opsi B">
            </div>
            <div class="form-group">
                <label for="option_c">Opsi C</label>
                <input type="text" name="questions[0][c]" class="form-control" placeholder="Masukkan opsi C">
            </div>
            <div class="form-group">
                <label for="option_d">Opsi D</label>
                <input type="text" name="questions[0][d]" class="form-control" placeholder="Masukkan opsi D">
            </div>
            <div class="form-group">
                <label for="option_e">Opsi E</label>
                <input type="text" name="questions[0][e]" class="form-control" placeholder="Masukkan opsi E">
            </div>
            <div class="form-group">
                <label for="answer_key">Kunci Jawaban</label>
                <select name="questions[0][kunci]" class="form-control">
                    <option value="">-- Pilih Kunci Jawaban --</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="e">E</option>
                </select>
            </div>
        </div>
        <button type="button" id="add-question" class="btn btn-secondary">Tambah Pertanyaan</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script>
document.getElementById('add-question').addEventListener('click', function() {
    var container = document.getElementById('questions-container');
    var questionIndex = container.children.length / 7; // Each question block has 7 input fields

    var questionHtml = `
        <div class="form-group">
            <label for="question">Pertanyaan</label>
            <input type="text" name="questions[${questionIndex}][question]" class="form-control" placeholder="Masukkan pertanyaan">
        </div>
        <div class="form-group">
            <label for="option_a">Opsi A</label>
            <input type="text" name="questions[${questionIndex}][a]" class="form-control" placeholder="Masukkan opsi A">
        </div>
        <div class="form-group">
            <label for="option_b">Opsi B</label>
            <input type="text" name="questions[${questionIndex}][b]" class="form-control" placeholder="Masukkan opsi B">
        </div>
        <div class="form-group">
            <label for="option_c">Opsi C</label>
            <input type="text" name="questions[${questionIndex}][c]" class="form-control" placeholder="Masukkan opsi C">
        </div>
        <div class="form-group">
            <label for="option_d">Opsi D</label>
            <input type="text" name="questions[${questionIndex}][d]" class="form-control" placeholder="Masukkan opsi D">
        </div>
        <div class="form-group">
            <label for="option_e">Opsi E</label>
            <input type="text" name="questions[${questionIndex}][e]" class="form-control" placeholder="Masukkan opsi E">
        </div>
        <div class="form-group">
            <label for="answer_key">Kunci Jawaban</label>
            <select name="questions[${questionIndex}][kunci]" class="form-control">
                <option value="">-- Pilih Kunci Jawaban --</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="c">C</option>
                <option value="d">D</option>
                <option value="e">E</option>
            </select>
        </div>
    `;
    container.insertAdjacentHTML('beforeend', questionHtml);
});
</script>

@endsection
