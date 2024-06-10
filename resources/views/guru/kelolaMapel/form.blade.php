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
                            <h1>Form Tambah Mata Pelajaran</h1>
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
                                <form action="/kelMapel" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="mapel">Mapel</label>
                                            <input type="text" name="mapel" class="form-control" id="mapel" placeholder="Enter Mapel">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" name="gbr" class="form-control" id="gambar" onchange="previewImage(event)">
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
    </script>

@endsection