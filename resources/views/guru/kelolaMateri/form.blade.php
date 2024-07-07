@extends('layout.mainGuru')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Kelola Materi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/kelMateri">Kelola Materi</a></li>
            <li class="breadcrumb-item active">Form Tambah Materi</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
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
                                            <input type="text" name="namaMateri" class="form-control @error('namaMateri') is-invalid @enderror" id="namaMateri" placeholder="Enter materi" value="{{ old('namaMateri') }}">
                                            @error('namaMateri')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="linkYt">Link YT</label>
                                            <input type="text" name="linkYt" class="form-control @error('linkYt') is-invalid @enderror" id="linkYt" placeholder="Enter linkYt" value="{{ old('linkYt') }}">
                                            @error('linkYt')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="file">File</label>
                                            <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="file">
                                            @error('file')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" name="gbr" class="form-control @error('gbr') is-invalid @enderror" id="gambar" onchange="previewImage(event)">
                                            @error('gbr')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="preview">Preview Gambar</label>
                                            <img id="imagePreview" src="#" alt="Preview Gambar" style="display: none; max-width: 100%; height: auto;">
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
    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();
            
            reader.onload = function(){
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }
            
            if(input.files && input.files[0]){
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Display previously uploaded image if it exists
        @if(old('gbr'))
            document.addEventListener('DOMContentLoaded', function() {
                const imagePreview = document.getElementById('imagePreview');
                imagePreview.src = "{{ old('gbr') }}";
                imagePreview.style.display = 'block';
            });
        @endif
    </script>
@endsection
