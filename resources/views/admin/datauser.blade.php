<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Nama Aplikasi | Data User</title>

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
            <h1 class="m-0 text-dark">Data User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <div class="content" >
      <div class="container-fluid">
        <a href="{{route('user')}}"><div type="button" class="btn btn-success float-right" style="margin-bottom:15px;">Tambah Data</div></a>
     <!-- SEARCH FORM -->
          <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($user as $usr)
              <tr>
                <th scope="row">{{$usr->id}}</th>
                <td>{{$usr->name}}</td>
                <td>{{$usr->email}}</td>
                <td>{{$usr->password}}</td> 
                <td>
                  <a href="{{route('useredit',[$usr->id])}}">
                      <img src="https://img.icons8.com/fluent-systems-filled/24/000000/edit-property.png">
                  </a>
                    <a href="{{route ('hapususer',[$usr->id])}}">
                      <img src="https://img.icons8.com/metro/26/000000/trash.png"/>
                  </a>
							  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.content -->
  </div>
  /.content-wrapper

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