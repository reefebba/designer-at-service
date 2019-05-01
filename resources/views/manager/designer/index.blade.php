@extends('layouts.master')

@section('links')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/admin_dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/responsive_navbar.css') }}">

@endsection

@section('title')
Active Designer
@endsection

@section('contents')

  <!-- tambah wrapper -->
  <div class="wrapper">

    <!-- Sidebar -->
    @include('component.sidebar')
    <!-- End Sidebar -->

    <div class="grid-container">
        <!-- Header -->
        @section('nav-title')
          Designer
        @endsection
        @include('component.header')
      <!-- End header -->

        <div class="container-fluid mt-5">
          <div class="row">
            <div class="col-md-4 mb-5">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="{{ asset('/images/avatar.png') }}" class="card-img" alt="gambar">
                <div class="card-body">
                  <h5 class="card-title">Nama Desainer</h5>
                  <p class="card-text">Deskripsi Singkat</p>
                  <a href="/manager/profile/1" class="btn btn-desainer">Detail</a>
                </div>
              </div>
            </div>

          </div>
        </div>

    </div>
  <!-- akhir wrapper -->
  </div>
  <!--  -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/admin/js_files/nav-responsive.js') }}"></script>
@endsection
