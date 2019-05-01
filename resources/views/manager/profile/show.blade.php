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
            <div class="row ml-5 mr-5 mt-2">
              <div class="col-md-12 admin-profile-form mx-auto align-items-center shadow">

                <form method="POST" action="{{route('manager.profile.update', $designer)}}">
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
                    <label class="d-block">Nomor Telepon</label>
                    <input value="{{ $designer->phone }}" class="profilPhone" type="tel" name="phone">

                    @if ($errors->has('phone'))
                    <div class="alert alert-danger">
                      {{ $errors->first('phone') }}
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
                  <hr>

                  <button type="submit" class="m-1 btn btn-success">Edit</button>
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


                @foreach($designer->designs as $design)
                  <h2 class="text-center mt-1">Total design</h2>
                  <div class="col-md-4 mb-5 mt-3">
                    <div class="order-card mx-auto">
                        <input class="btn-detail-order" type="checkbox" name="" >
                        <div class="toggle"><i class="fas fa-info"></i></div>
                        <a href="/designer/design/{{$design->uuid}}" class="link-detail-order mx-3">Detail</a>
                      <div class="short-desc mx-3 mt-3">
                        <h5 class="order-id">Jenis Kajian : {{$design->lecture->type}} </h5>
                        <h5 class="order-id">Judul Kajian : {{$design->lecture->title}}</h5>
                        <h5 class="order-id">Pemateri : {{$design->lecture->lecturer}}</h5>
                        @if($design->status == 'open')
                          <h5 class="order-id">Tagline : {{$design->lecture->tag_line}}</h5>
                        @endif
                        @if($design->status != 'open')
                          <hr>
                          <h5 class="order-id">Designer : {{$design->designer->name}}</h5>
                        @endif
                      </div>
                      <div class="detail-order mt-2 mx-3">
                        <p>Tempat : {{$design->lecture->place}}</p>
                        <p>Tanggal : {{$design->lecture->date}}</p>
                        <p>Waktu : {{$design->lecture->time}}</p>
                      </div>
                    </div>
                  </div>
                @endforeach


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
