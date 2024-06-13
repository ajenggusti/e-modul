@extends('layout.mainGuru')
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Form Tambah Materi</h1>
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
                                <form action="/kelMateri" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="namaMateri">Nama Materi</label>
                                            <input type="text" name="namaMateri" class="form-control" id="namaMateri" placeholder="Enter materi">
                                        </div>
                                        <div class="form-group">
                                            <label for="linkYt">Link YT</label>
                                            <input type="text" name="linkYt" class="form-control" id="linkYt" placeholder="Enter linkYt">
                                        </div>
                                        <div class="form-group">
                                            <label for="file">File</label>
                                            <input type="file" name="file" class="form-control" id="file">
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select name="category" class="form-control" id="category">
                                                @foreach($mapels as $mapel)
                                                    <option value="{{ $mapel->id }}">{{ $mapel->mapel }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="materi" class="form-label">materi <small style="color: rgb(255, 0, 0); font-weight: bold;">*</small></label>
                                            <textarea name="materi" id="editor" class="form-control @error('materi') is-invalid @enderror">{{ old('materi') }}</textarea>
                                            @error('materi')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
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
