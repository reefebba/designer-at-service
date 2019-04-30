@extends('layouts.master')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/admin_dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/responsive_navbar.css') }}">
@endsection

@section('title')
Profil
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
            Profil
        @endsection
        @include('component.header')
      <!-- End header -->
      <div class="container text center my-5">
        <div class="row">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <form class="admin-profile-form mx-auto align-items-center shadow">
                  <div class="inputBox">
                    <label class="d-block">Nama</label>
                    <input class="profilName" type="text" name="fullname">
                  </div>
                  <div class="inputBox">
                    <label class="d-block">Email</label>
                    <input class="profilEmail" type="email" name="email">
                  </div>

                  <div class="inputBox">
                    <label class="d-block">Nomor Telepon</label>
                    <input class="profilPhone" type="tel" name="phone_number">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!--  -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/admin/js_files/nav-responsive.js') }}"></script>
@endsection
