<!DOCTYPE html>
<!--
This is a starter template page. Use this page to 456t your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Nama Aplikasi-EditKeluar</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Fonts icon8 -->
  <link rel="stylesheet" href="https://st.icons8.com/tmp-web-fonts/71/a0/7798a94b81c56ae8aa852e8b0671a06d6c373803/styles.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
<!-- Navbar -->
@include('admin/header')
<!-- /.navbar -->

 <!-- Main Sidebar continer -->
@include('admin/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Surat Keluar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('out')}}">Surat Keluar</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content" >
      <div class="container-fluid">
        @yield('content')
        <title>form</title>
  </head>
  <body>
  <div class="container" style="margin-top: 3em;">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form action="{{route('keluarupdate',['id'=> $kel->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="post-preview">
                        <div class="form-group">
                            <label>Alamat Penerima</label>
                            <input type="text" class="form-control" name="AlamatPenerima" value="{{$kel->AlamatPenerima}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nomor Surat</label>
                            <input type="text" class="form-control" name="NomorSurat" value="{{$kel->NomorSurat}}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{$kel->Tanggal}}" required>
                        </div>
                        <div class="form-group">
                            <label>Perihal</label>
                            <textarea class="form-control" rows="5" name="Perihal" required>{{$kel->Perihal}}</textarea>
                        </div>   
                        <div class="form-group">
                          <label>Upload Foto</label>
                          <input type="text" name="oldimg" class="d-none" value="{{$kel->Foto}}">
                          <img src="{{$kel->getImages()}}" class="w-25">
                          <input type="file" name="image" id="image" value="{{$kel->Foto}}">
                      </div>          
                    </div>
                    <div class="clearfix">
                      <button type="submit" class="btn btn-primary float-right ml-2">Simpan</button>

                      <a class="btn btn-secondary float-right" href="{{route('out')}}">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  @include('admin/footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
