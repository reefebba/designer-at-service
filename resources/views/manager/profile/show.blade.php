@extends('layouts.master')

@section('links')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/admin_dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/responsive_navbar.css') }}">

@endsection

@section('title')
{{ $designer->name }} Profile
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
        {{ $designer->name }} Profile
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
                    <input value="{{ $designer->name }}" class="profilName" type="text" name="fullname">
                  </div>

                  <div class="inputBox">
                    <label class="d-block">Divisi</label>
                    <input value="Designer" class="profilDivisi" type="text" name="division">
                  </div>

                  <div class="inputBox">
                    <label class="d-block">Email</label>
                    <input value="{{ $designer->email }}" class="profilEmail" type="email" name="email">
                  </div>

                  <div class="inputBox">
                    <label class="d-block">Nomor Telepon</label>
                    <input value="{{ $designer->phone }}" class="profilPhone" type="tel" name="phone_number">
                  </div>

                  <div class="text-right">
                    <a href="" class="btn btn-danger">Hapus</a>
                    <a href="" class="btn btn-primary">Ubah</a>
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
