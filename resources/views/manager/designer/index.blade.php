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

        @if (count($designers) === 0)
          <div class="container mt-5">
            <div class="alert alert-success" role="alert">
              <p class="alert-heading">Notice!</p>
              <hr>
              @can('manage')
                <h4>No designer is banned!</h4>
              @endcan
              @can('designer')
                <h4>Tidak ada Tugas!</h4>
              @endcan
            </div>
          </div>
        @endif

        <div class="container-fluid mt-5">
          <div class="row">
            @foreach($designers as $designer)
            <div class="col-md-4 mb-5">
              <div class="card mx-auto" style="width: 18rem;">
                <img src="{{ asset('/images/avatar.png') }}" class="card-img" alt="gambar">
                <div class="card-body">
                  <h5 class="card-title">{{$designer->name}}</h5>
                  <p class="card-text">{{$designer->email}}</p>
                  <p class="card-text">Total design : {{$designer->designs_count}}</p>
                  <div class="text-left">
                    @if($designer->deleted_at == '')
                      <a href="{{route('manager.profile.show', $designer)}}" class="m-1 btn btn-desainer">Detail</a>
                    @else
                      <form method="GET" action="{{route('manager.profile.show.banned', $designer)}}">
                        <button type="submit" class="m-1 btn btn-desainer">Detail</button>
                      </form>

                      <form method="POST" action="{{route('manager.designer.restore', $designer)}}">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="m-1 btn btn-primary">Activate</button>
                      </form>
                    @endif
                </div>

                </div>
              </div>
            </div>
            @endforeach
          </div>
            <div class="ml-5">{{$designers->links()}}</div> 
        </div>
    </div>
  <!-- akhir wrapper -->
  </div>
  <!--  -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/admin/js_files/nav-responsive.js') }}"></script>
@endsection
