@extends('layout.mainMurid')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Akses Post Test</title>
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
            margin-bottom: 20px;
        }
        .question {
            margin: 20px 0;
            text-align: left;
        }
        .question p {
            color: #ff66b2;
        }
        .question label {
            display: block;
            margin: 5px 0;
        }
        .question input[type="radio"] {
            margin-right: 10px;
        }
        .no-posttests {
            color: #ff66b2;
        }
        button {
            background-color: #ff66b2;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 20px 0;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #e60073;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1>Kerjakan soal dibawah ini!</h1>

        @if($datas->isEmpty())
            <p class="no-posttests">No posttests found for this materi.</p>
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
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="b">
                            {{ $data->b }}
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="c">
                            {{ $data->c }}
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="d">
                            {{ $data->d }}
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="e">
                            {{ $data->e }}
                        </label>
                    </div>
                @endforeach
                <button type="submit">Submit</button>
            </form>
        @endif
    </div>
</body>
</html>
@endsection
