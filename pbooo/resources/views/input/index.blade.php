<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <!-- Navbar -->
       
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        
        <div class="content-wrapper"style="background-image: url({{ asset('frontend/img/bg.webp')}}); ">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Nilai</h1>
                     </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Tambah Data Nilai</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">

    <div class="col-lg-5">
        <form action="{{ url('input') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Mata Plejaran<span class="text-danger">*</span></label>
                <input class="form-control" type="string" name="mapel" value="{{ old('mapel') }}" />
            </div>
            <div class="form-group">
                <label>Nilai uh <span class="text-danger">*</span></label>
                <input class="form-control" type="string" name="nilaiuh" value="{{ old('email') }}" />
            </div>
            <div class="form-group">
                <label>nilai us <span class="text-danger">*</span></label>
                <input class="form-control" type="nilaius" name="password" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ url('input.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
</div>
</body>
</html>