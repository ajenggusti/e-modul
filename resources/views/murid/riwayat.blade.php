@extends('layout.mainMurid')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0e0e0;
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
        h4 {
            text-align: center;
            color: #242775;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
            color: #333;
        }
        td {
            background-color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #f7f7f7;
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
            text-decoration: none;
        }
        .btn-submit:hover {
            background-color: #e60073;
        }
    </style>
</head>
<body>
    <div class="container">
        <h4>Riwayat Nilai</h4>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($nilais->isEmpty())
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
                    @foreach ($nilais as $nilai)
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
