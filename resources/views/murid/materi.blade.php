@extends('layout.mainMurid')
@section('content')
{{-- mengerjakan pretest --}}
<a href="{{ route('kelPretest.create') }}?id={{ $data->id }}">Kerjakan Pretest terlebih dahulu pada {{ $data->nama_materi }}</a>
<br>
{{-- liat materi --}}
<a href="/aksesMateri/{{ $data->id }}">Lihat Materi</a>
<br>
<a href="/aksesPostTest/{{ $data->id }}">Kerjakan posttest</a>
@endsection