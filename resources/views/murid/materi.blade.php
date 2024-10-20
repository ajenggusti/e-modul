@extends('layout.mainMurid')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e0e0e0;
        color: #333;
    }
    .content {
        width: 80%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        text-align: center;
    }
    .link-container {
        margin: 20px 0;
    }
    .link-container a {
        display: block;
        padding: 10px;
        margin: 10px 0;
        background-color: #242775;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .link-container a:hover {
        background-color: #777;
    }
</style>

<div class="content">
    @if (session('success') )
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="link-container">
        @if($pretestCompleted)
            <a href="/aksesMateri/{{ $data->id }}">Lihat Materi {{$data->nama_materi}}</a>
            <a href="/aksesPostTest/{{ $data->id }}">Kerjakan Test Akhir {{$data->nama_materi}}</a>
        @else
            <a href="{{ route('kelPretest.create') }}?id={{ $data->id }}">
                Kerjakan Test Awal Terlebih Dahulu Pada {{ $data->nama_materi }}
            </a>
            <a onclick="showAlert()" href="#">Lihat Materi {{$data->nama_materi}}</a>
            <a onclick="showAlert()" href="#">Kerjakan Test Akhir {{$data->nama_materi}}</a>
        @endif
    </div>
</div>
<script>
    function showAlert() {
        alert("Kamu belum bisa mengakses, kerjakan test awal terlebih dahulu.");
    }
</script>
@endsection
