@extends('layouts.master')

@section('links')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin_dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive_navbar.css') }}">

@endsection

@section('title')
Designer add
@endsection

@section('contents')

<!-- tambah wrapper -->
<div class="wrapper">

  <!-- Sidebar -->
  @include('manager.component.sidebar')
  <!-- End Sidebar -->

  <div class="grid-container">
    <!-- Header -->
    @section('nav-title')
    Designer Add
    @endsection
    
    @include('manager.component.header')
    <!-- End header -->

    <div class="container mt-5 mx-auto">
      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">
          <div class="text-center mb-4">
            <h3 class="add-designer">Daftarkan Desainer Baru</h3>
          </div>

          <form class="admin-profile-form mx-auto align-items-center shadow mb-4" method="POST" action="{{route('manager.designer.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="inputBox">
              <label class="d-block">Nama</label>
              <input class="profilName" type="text" name="name">

              @if ($errors->has('name'))
              <div class="alert alert-danger">
                {{ $errors->first('name') }}
              </div>
              @endif
            </div>

            <div class="inputBox">
              <label class="d-block">Password</label>
              <input class="profilName" type="password" name="password">

              @if ($errors->has('password'))
              <div class="alert alert-danger">
                {{ $errors->first('password') }}
              </div>
              @endif
            </div>

            <div class="inputBox">
              <label class="d-block">Email</label>
              <input class="profilEmail" type="email" name="email">

              @if ($errors->has('email'))
              <div class="alert alert-danger">
                {{ $errors->first('email') }}
              </div>
              @endif
            </div>

            <div class="inputBox">
              <label class="d-block">Nomor Telepon</label>
              <input class="profilPhone" type="tel" name="phone">

              @if ($errors->has('phone'))
              <div class="alert alert-danger">
                {{ $errors->first('phone') }}
              </div>
              @endif
            </div>

            <div class="text-right">
              <button type="submit" class="btn btn-primary">Daftar</button>
            </div>

          </form>
        </div>
        <div class="col-md-4"></div>

      </div>
    </div>

    @endsection

    @section('scripts')
    <script type="text/javascript" src="{{ asset('/js/nav-responsive.js') }}"></script>
    @endsection