@extends('layout.mainMurid')
@section('content')
Mata pelajaran yang kamu pilih  :  {{ $mapel->mapel }} <br>
@foreach ($datas as $data)
    <a href="/preMateriPost/{{ $data->id }}">{{ $data->nama_materi }}</a>
    
    <br>
@endforeach

@endsection