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

  <title>Nama Aplikasi | SuratMasuk</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Fonts icon8 -->
  <link rel="stylesheet" href="https://st.icons8.com/tmp-web-fonts/71/a0/7798a94b81c56ae8aa852e8b0671a06d6c373803/styles.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
 <link rel="stylesheet" href="{{ asset('lte/dist/dataTables/datatables.min.css') }}">
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
            <h1 class="m-0 text-dark">Surat Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Surat Masuk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

      <!-- Search date to date -->
      <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form class="form-group row" action="" method="GET">
              <label for="date" class="col-form-labe col-sm-2">Tanggal Awal</label>
              <div class="col-sm-3">
                <input type="date" class="form-control input-sm" id="from" name="from" required>
              </div>
              <label for="date" class="col-form-labe col-sm-2">Tanggal Akhir</label>
              <div class="col-sm-3">
                <input type="date" class="form-control input-sm" id="to" name="to" required>
              </div>
              <div class="col-sm-2">
                <button type="submit" role="submit" class="btn" name="search" title="Search"><img src="https://img.icons8.com/ios-glyphs/30/000000/search.png"/></button>
              </div>
            </form>
          </div>
        </div>
      </div>

    <!-- Main content -->
    <div class="content" >
      <div class="container-fluid">
        <a href="{{route('masuk')}}"><div type="button" class="btn btn-success float-right" style="margin-bottom:15px;">Tambah Data</div></a>
        <a href="{{route('createmasuk')}}"><div type="button" class="btn btn-primary float-right" style="margin-bottom:15px; margin-right:15px;"> 
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
        width="20" height="20"
        viewBox="0 0 150 150"
        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M78.83333,14.33333c-3.956,0 -7.16667,3.21067 -7.16667,7.16667v57.33333h-25.08333c-1.97902,0 -3.58333,1.60431 -3.58333,3.58333c0.00014,0.95031 0.37777,1.86164 1.0498,2.53353c0.07162,0.07315 0.14634,0.1432 0.22396,0.20995l36.58919,34.50359l0.23795,0.22396c1.32656,1.24737 3.07819,1.94302 4.89909,1.94564c1.8209,-0.00261 3.57253,-0.69826 4.89909,-1.94564l0.09798,-0.08399c0.02354,-0.02782 0.04687,-0.05581 0.06998,-0.08399l36.5752,-34.48958c0.07258,-0.06249 0.14262,-0.12786 0.20996,-0.19597l0.05599,-0.04199c0.01411,-0.01388 0.02811,-0.02788 0.042,-0.04199c0.67204,-0.6719 1.04966,-1.58323 1.0498,-2.53353c0,-1.97902 -1.60431,-3.58333 -3.58333,-3.58333h-25.08333v-57.33333c0,-3.956 -3.21067,-7.16667 -7.16667,-7.16667h-7.16667zM21.5,143.33333c-2.58456,-0.03655 -4.98858,1.32136 -6.29153,3.55376c-1.30295,2.2324 -1.30295,4.99342 0,7.22582c1.30295,2.2324 3.70697,3.59031 6.29153,3.55376h129c2.58456,0.03655 4.98858,-1.32136 6.29153,-3.55376c1.30295,-2.2324 1.30295,-4.99342 0,-7.22582c-1.30295,-2.2324 -3.70697,-3.59031 -6.29153,-3.55376z"></path></g></g></svg>
        Export</div></a>
     <!-- SEARCH FORM -->
          <form class="form-inline ml-3" method="GET" action="{{route('cari')}}">
            <div class="input-group input-group-sm">
              <input name="cari" input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        @yield('content')
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Alamat Pengirim</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nomor Surat</th>
                <th scope="col">Perihal</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($masuk as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td class="w-25">{{$item->AlamatPengirim}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->NomorSurat}}</td>
                <td class="w-25">{{$item->Perihal}}</td>
                <td><img src="{{asset('lte/dist/images')}}/{{$item->Foto}}" class="img-thumbnail" width="150"></td>
                <td>
                  <a href="{{route ('masukedit',[$item->id])}}">
                    <img src="https://img.icons8.com/fluent-systems-filled/24/000000/edit-property.png">
                  </a>
                    <a href="{{route ('hapusmasuk',[$item->id])}}"><img src="https://img.icons8.com/metro/26/000000/trash.png"/>
                  </a>
							  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
            {{ $masuk->links() }} 
      
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
<script src="{{ asset('lte/dist/dataTables/datatables.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function()(
$('#datatables').DataTable();

</script>
</body>
</html>