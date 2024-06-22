@extends('layout.mainMurid')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Akses Post Test</title>
</head>
<body>
    <h1>Posttest Data for Materi ID: {{ $id }}</h1>

    @if($datas->isEmpty())
        <p>No posttests found for this materi.</p>
    @else
        <form action="{{ route('submitPostTest') }}" method="POST">
            @csrf
            <input type="hidden" name="id_materi" value="{{ $id }}">
            @foreach($datas as $data)
                <div class="question">
                    <p>{{ $data->pertanyaan }}</p>
                    <label>
                        <input type="radio" name="answers[{{ $data->id }}]" value="a">
                        {{ $data->a }}
                    </label><br>
                    <label>
                        <input type="radio" name="answers[{{ $data->id }}]" value="b">
                        {{ $data->b }}
                    </label><br>
                    <label>
                        <input type="radio" name="answers[{{ $data->id }}]}" value="c">
                        {{ $data->c }}
                    </label><br>
                    <label>
                        <input type="radio" name="answers[{{ $data->id }}]}" value="d">
                        {{ $data->d }}
                    </label><br>
                    <label>
                        <input type="radio" name="answers[{{ $data->id }}]}" value="e">
                        {{ $data->e }}
                    </label>
                </div>
                <br>
            @endforeach
            <button type="submit">Submit</button>
        </form>
    @endif
</body>
</html>


@endsection