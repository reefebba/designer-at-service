@extends('layouts.master')

@section('links')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin_dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive_navbar.css') }}">

@endsection

@section('title')
My Profile
@endsection

@section('contents')

<!-- tambah wrapper -->
<div class="wrapper">

  @include('designer.component.sidebar')

  <div class="grid-container">
    <!-- Header -->
    @section('nav-title')
      My Profile
    @endsection

    @include('designer.component.header')
    <!-- End header -->

    <div class="container text center my-5">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <form class="admin-profile-form mx-auto align-items-center shadow" method="POST" action="{{route('profile.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="inputBox">
                  <label class="d-block">Nama</label>
                  <input value="{{ $designer->name }}" class="profilName" type="text" name="name">

                  @if ($errors->has('name'))
                  <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                  </div>
                  @endif
                </div>

                <div class="inputBox">
                  <label class="d-block">Divisi</label>
                  <input value="Designer" class="profilDivisi" type="text">
                </div>

                <div class="inputBox">
                  <label class="d-block">Email</label>
                  <input value="{{ $designer->email }}" class="profilEmail" type="email" name="email">

                  @if ($errors->has('email'))
                  <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                  </div>
                  @endif
                </div>

                <div class="inputBox">
                  <label class="d-block">Password</label>
                  <input value="{{ $designer->password }}" class="profilpassword" type="text" name="password">

                  @if ($errors->has('password'))
                  <div class="alert alert-danger">
                    {{ $errors->first('password') }}
                  </div>
                  @endif
                </div>

                <div class="inputBox">
                  <label for="photo">Photo</label>
                  <input type="file" class="form-control-file" id="photo" name="photo">

                  @if ($errors->has('photo'))
                  <div class="alert alert-danger">
                    {{ $errors->first('photo') }}
                  </div>
                  @endif
                </div>

                <div class="inputBox">
                  <label class="d-block">Nomor Telepon</label>
                  <input value="{{ $designer->phone ?? old('phone') }}" class="profilPhone" type="tel" name="phone">

                  @if ($errors->has('phone'))
                  <div class="alert alert-danger">
                    {{ $errors->first('phone') }}
                  </div>
                  @endif
                </div>

                <div class="text-right">
                  <button type="submit" class="btn btn-primary">Ubah</button>
                </div>

                <div class="text-center">
                  <a href="{{ route('logout') }}" class="btn btn-outline-danger text-center" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
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
<script type="text/javascript" src="{{ asset('/js/nav-responsive.js') }}"></script>
@endsection
