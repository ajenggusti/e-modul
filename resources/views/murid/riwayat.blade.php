@extends('layout.mainMurid')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f0;
            color: #333;
        }
        .container {
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ff66b2;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ff66b2;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #ffe6f0;
        }
        .btn-submit {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px;
            background-color: #ff66b2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
        }
        .btn-submit:hover {
            background-color: #e60073;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Riwayat Nilai</h1>

        @if (session('success') )
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if($nilais->isEmpty())
            <p>Belum ada nilai yang tercatat.</p>
        @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nilai</th>
                    <th>Materi</th>
                    <th>Jam dan Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($nilais as $nilai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $nilai->nilai }}</td>
                        <td>{{ $nilai->materi->nama_materi }}</td>
                        <td>{{ \Carbon\Carbon::parse($nilai->created_at)->format('H:i:s | d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        @endif
    </div>
</body>
</html>

@endsection