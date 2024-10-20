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
    h4 {
        color: #242775;
        margin-bottom: 20px;
    }
    .video-link iframe {
        width: 100%;
        height: 450px;
    }
    hr {
        border: 1px solid #242775;
        margin: 20px 0;
    }
    .download-section {
        margin-top: 20px;
    }
    .download-link {
        display: inline-block;
        padding: 10px 20px;
        background-color: #242775;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .download-link:hover {
        background-color: #777;
        color: #ffffff;
    }

    /* Media query for mobile devices */
    @media (max-width: 768px) {
        .video-link iframe {
            height: 300px;
        }
    }
    @media (max-width: 480px) {
        .video-link iframe {
            height: 200px;
        }
    }
</style>

<div class="content">
    <h4>Materi {{ $data->nama_materi }}</h4>
    <p>Setelah mengerjakan test awal, selanjutnya silahkan menyimak video di bawah ini untuk mendapatkan pemahaman terkait materi {{$data->nama_materi}}</p>
    <div class="video-link">
        {!! $data->link_yt !!}
    </div>
    <p>Sumber refrensi youtube : <a href="{{ $data->yt }}" target="_blank">{{ $data->yt }}</a></p>
    <hr>
    <div class="download-section">
        Setelah menyimak video materi pembelajaran diatas, anda dapat mengunduh materi {{$data->nama_materi}} yang sudah disediakan untuk mendukung pemahaman tentang materi {{$data->nama_materi}} <br>
        <a href="{{ asset('storage/' . $data->file) }}" target="_blank" class="download-link">Unduh File {{ $data->nama_materi }}</a>
    </div>
</div>
@endsection
