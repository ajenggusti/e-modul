@extends('layout.mainMurid')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffe6f0;
        color: #333;
    }
    .content-wrapper {
        padding: 20px;
    }
    .content-header h1 {
        color: #ff66b2;
        margin-bottom: 20px;
    }
    .card-primary {
        border-top: 3px solid #ff66b2;
    }
    .card-header {
        background-color: #ff66b2;
        color: #fff;
    }
    .card-title {
        margin: 0;
    }
    .form-group label {
        color: #ff66b2;
    }
    .form-control {
        border-radius: 5px;
        border: 1px solid #ff66b2;
    }
    .btn-primary {
        background-color: #ff66b2;
        border-color: #ff66b2;
    }
    .btn-primary:hover {
        background-color: #e60073;
        border-color: #e60073;
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
                        <h1>Pretest</h1>
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
                                        <label for="jawaban">Apa yang kamu ketahui tentang bab ini??</label>
                                        <textarea name="jawaban" class="form-control" id="jawaban" rows="5" placeholder="Masukkan jawaban"></textarea>
                                    </div>
                                    <input type="hidden" name="id_materi" value="{{ $data->id }}">
                                </div>
                                <!-- /.card-body -->
                            
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
