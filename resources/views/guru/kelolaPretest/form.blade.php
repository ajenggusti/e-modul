@extends('layout.mainMurid')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #e0e0e0;
        color: #777;
    }
    .content-wrapper {
        padding: 20px;
    }
    .content-header h1 {
        color: #242775;
        margin-bottom: 20px;
    }
    .card-primary {
        border-top: 3px solid #777;
    }
    .card-header {
        background-color: #777;
        color: #fff;
    }
    .card-title {
        margin: 0;
    }
    .form-group label {
        color: #242775;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #777;
    }
    .btn-primary {
        background-color: #242775;
        border-color: #fff;
    }
    .btn-primary:hover {
        background-color: #777;
        border-color: #fff;
    }
    .card-footer {
        text-align: center;
    }
</style>

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Test Awal</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="/kelPretest" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="jawaban">Apa yang kamu ketahui tentang {{$data->nama_materi}}??</label>
                                        <textarea name="jawaban" class="form-control" id="jawaban" rows="5" placeholder="Masukkan jawaban"></textarea>
                                    </div>
                                    <input type="hidden" name="id_materi" value="{{ $data->id }}">
                                </div>
                                <!-- /.card-body -->
                            
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
@endsection
