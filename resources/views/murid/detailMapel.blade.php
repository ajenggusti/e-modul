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
    }
    h1 {
        text-align: center;
        color: #ff66b2;
    }
    .subject-info {
        font-size: 18px;
        color: #ff66b2;
        margin-bottom: 20px;
    }
    .material-list a {
        display: block;
        padding: 10px;
        margin: 10px 0;
        background-color: #ff66b2;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
        transition: background-color 0.3s;
    }
    .material-list a:hover {
        background-color: #e60073;
    }
</style>

<div class="content">
    <h3>Daftar Materi</h3>
    <div class="subject-info">
        Mata pelajaran yang kamu pilih: {{ $mapel->mapel }}
    </div>
    <div class="material-list">
        @foreach ($datas as $data)
            <a href="/preMateriPost/{{ $data->id }}">{{ $data->nama_materi }}</a>
        @endforeach
    </div>
</div>
@endsection
