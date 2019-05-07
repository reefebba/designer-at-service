@extends('layouts.master')

@section('links')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin_dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive_navbar.css') }}">

@endsection

@section('title')
{{ $designer->name }} Profile
@endsection

@section('contents')

<!-- tambah wrapper -->
<div class="wrapper">

  @include('manager.component.sidebar')

  <div class="grid-container">
    <!-- Header -->
    @section('nav-title')
    {{ $designer->name }} Profile
    @endsection
    
    @include('manager.component.header')
    <!-- End header -->


    <div class="container text center my-5">
      <div class="row">
        <div class="container">
          <div class="row ml-5 mr-5 mt-2">
            <div class="col-md-12 admin-profile-form mx-auto align-items-center shadow">

              <form method="POST" action="{{route('manager.profile.update', $designer)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="inputBox">
                  <label class="d-block">Nama</label>
                  <input value="{{ $designer->name }}" class="profilName" type="text" name="name">

                  @if ($errors->has('name'))
                  <div class="alert alert-danger">
                    <p style = 'text-align:center'>{{ $errors->first('name') }}</p>
                  </div>
                  @endif
                </div>

                <div class="inputBox">
                  <label class="d-block">Divisi</label>
                  <input value="Designer" class="profilDivisi" type="text" disabled>
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

                @if($designer->can != 'manage')
                <button type="submit" class="m-1 btn btn-success">Edit</button>
                @endif
              </form>

              @can('manage')
              <div class="text-right">
                @if($designer->deleted_at != '')
                <form method="POST" action="{{route('manager.designer.restore', $designer)}}">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="m-1 btn btn-primary">Activate</button>
                </form>
                <form method="POST" action="{{route('manager.designer.ban', $designer)}}">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="m-1 btn btn-danger">Delete</button>
                </form>
                @elseif($designer->can != 'manage')
                <form method="POST" action="{{route('manager.designer.ban', $designer)}}">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="m-1 btn btn-danger">Ban</button>
                </form>
                <form method="POST" action="{{route('manager.designer.promote', $designer)}}">
                  @csrf
                  @method('PATCH')
                  <button type="submit" class="m-1 btn btn-primary">Promote</button>
                </form>
                @endif
              </div>
              @endcan

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
