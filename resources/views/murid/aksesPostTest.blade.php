@extends('layout.mainMurid')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Akses Post Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* Light grey background */
            color: #333; /* Dark grey text */
        }
        .content {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* White content background */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        h4 {
            color: #4e2e53; /* Purple color for headings */
            margin-bottom: 20px;
        }
        .question {
            margin: 20px 0;
            text-align: left;
        }
        .question p {
            color: #333; /* Dark grey text for questions */
            font-weight: bold; /* Bold font weight */
        }
        .question label {
            display: block;
            margin: 5px 0;
        }
        .question input[type="radio"] {
            margin-right: 10px;
        }
        .no-posttests {
            color: #4e2e53; /* Purple color for no posttests message */
        }
        button {
            background-color: #4e2e53; /* Purple button background */
            border: none;
            color: white; /* White text color */
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
            background-color: #5f3c6b; /* Darker purple on hover */
        }
    </style>
</head>
<body>
    <div class="content">
        <h4>Kerjakan soal dibawah ini!</h4>

        @if($datas->isEmpty())
            <p class="no-posttests">Soal belum tersedia.</p>
        @else
            <form action="{{ route('submitPostTest') }}" method="POST">
                @csrf
                <input type="hidden" name="id_materi" value="{{ $id }}">
                @foreach($datas as $index => $data)
                    <div class="question">
                        <p>{{ $index + 1 }}. {{ $data->pertanyaan }}</p>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="a">A. 
                            {{ $data->a }}
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="b">B. 
                            {{ $data->b }}
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="c">C. 
                            {{ $data->c }}
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="d">D. 
                            {{ $data->d }}
                        </label>
                        <label>
                            <input type="radio" name="answers[{{ $data->id }}]" value="e">E. 
                            {{ $data->e }}
                        </label>
                    </div>
                @endforeach
                <button type="submit">Kirim</button>
            </form>
        @endif
    </div>
</body>
</html>
@endsection
