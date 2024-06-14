@extends('layout.mainGuru')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Kelola Mata Pelajaran</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dbGuru">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/kelMapel">Mata Pelajaran</a></li>
            <li class="breadcrumb-item active">Form Tambah Mata Pelajaran</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


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
                                <form action="/kelMapel" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="mapel">Mapel</label>
                                            <input type="text" name="mapel" class="form-control @error('mapel') is-invalid @enderror" id="mapel" placeholder="Enter Mapel" value="{{ old('mapel') }}">
                                            @error('mapel')
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
