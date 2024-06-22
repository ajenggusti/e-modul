@extends('layout.mainMurid')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffe6f0;
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
        background-color: #ff66b2;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .link-container a:hover {
        background-color: #e60073;
    }
</style>

<div class="content">
    <div class="link-container">
        <a href="{{ route('kelPretest.create') }}?id={{ $data->id }}">
            Kerjakan Pretest terlebih dahulu pada {{ $data->nama_materi }}
        </a>
        <a href="/aksesMateri/{{ $data->id }}">Lihat Materi</a>
        <a href="/aksesPostTest/{{ $data->id }}">Kerjakan posttest</a>
    </div>
</div>
@endsection
