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
    }
    h3 {
        text-align: center;
        color: #242775;
    }
    .material-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    .material-item {
        width: calc(33.333% - 20px);
        background-color: #f0f0f0; 
        color: #333; 
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }
    .material-item:hover {
        transform: translateY(-10px);
    }
    .material-item img {
        width: 100%;
        height: auto;
    }
    .material-item-content {
        padding: 15px;
        text-align: center;
    }
    .material-item h4 {
        margin: 10px 0;
        font-size: 20px;
    }
    .material-item a {
        display: inline-block;
        padding: 10px 20px;
        background-color: #242775;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }
    .material-item a:hover {
        background-color: #777; 
    }

    /* Media query for mobile devices */
    @media (max-width: 768px) {
        .material-item {
            width: calc(50% - 20px);
        }
    }
    @media (max-width: 480px) {
        .material-item {
            width: 100%;
        }
    }
</style>

<div class="content">
    <h3>Daftar Materi</h3>
    <div class="material-list">
        @foreach ($datas as $data)
            <div class="material-item">
                <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->nama_materi }}">

                <div class="material-item-content">
                    <h4>{{ $data->nama_materi }}</h4>
                    <a href="/preMateriPost/{{ $data->id }}">Lihat Materi</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
