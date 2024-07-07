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
    h1 {
        color: #ff66b2;
        margin-bottom: 10px;
    }
    h4 {
        color: #ff66b2;
        margin-bottom: 20px;
    }
    .video-link {
        margin-bottom: 20px;
    }
    hr {
        border: 1px solid #ff66b2;
        margin: 20px 0;
    }
    .download-section {
        margin-top: 20px;
    }
    .download-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff66b2;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .download-link:hover {
        background-color: #e60073;
    }
</style>

<div class="content">
    <h4>Materi {{ $data->nama_materi }}</h4>
    <div class="video-link">
        {!! $data->link_yt !!}
    </div>
    <hr>
    <div class="download-section">
        akses materi dengan download file dibawah: <br>
        <a href="{{ asset('storage/' . $data->file) }}" target="_blank" class="download-link">Download File</a>
    </div>
</div>
@endsection
