@extends('layout.mainMurid')
@section('content')
<h1>{{ $data->mapel->mapel }}</h1>
<h4>{{ $data->nama_materi }}</h4>
{!! $data->link_yt !!} <hr>
akses materi dengan download file dibawah: <br>
<a href="{{ asset('storage/' . $data->file) }}" target="_blank">Download File</a>

@endsection