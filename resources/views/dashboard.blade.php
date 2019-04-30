@extends('layouts.master')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/admin_dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/responsive_navbar.css') }}">
@endsection

@section('title')
Beranda
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
          Beranda
        @endsection
        @include('component.header')
      <!-- End header -->


      
      <div class="row-middle page-body">
          <div class="page-content">
              <article>
                  <div class="order-box">

                      <a href="{{route('design.index')}}?status=open">
                    @can('manage')
                      <a href="{{route('manager.design.index')}}?status=open">
                    @endcan
                        <div class="order">
                            <h4>Open</h4>
                            <h2>{{$designs['open']}}</h2>
                        </div>
                      </a>

                      <a href="{{route('design.index')}}?status=in-progress">
                    @can('manage')
                      <a href="{{route('manager.design.index')}}?status=in-progress">
                    @endcan
                        <div class="order">
                            <h4>In progress</h4>
                            <h2>{{$designs['inProgress']}}</h2>
                        </div>
                      </a>

                      <a href="{{route('design.index')}}?status=finished">
                    @can('manage')
                      <a href="{{route('manager.design.index')}}?status=finished">
                    @endcan
                        <div class="order">
                            <h4>Finished</h4>
                            <h2>{{$designs['finished']}}</h2>
                        </div>
                      </a>

                      <a href="{{route('design.index')}}?status=failed">
                    @can('manage')
                      <a href="{{route('manager.design.index')}}?status=failed">
                    @endcan
                        <div class="order">
                            <h4>Failed</h4>
                            <h2>{{$designs['failed']}}</h2>
                        </div>
                      </a>
                      @can('manage')
                      <a href="#">
                        <div class="order total">
                            <h4>Total</h4>
                            <h2>{{$designs['total']}}</h2>
                        </div>
                      </a>
                      @endcan
                  </div>
              </article>
          </div>
      </div>
      @can('manage')
      <hr>
      <div class="row-middle page-body">
          <div class="page-content">
              <article>
                  <div class="order-box">
                      <a href="{{route('manager.designer.index')}}">
                        <div class="order desaigner">
                            <h4>Desaigner Active</h4>
                            <h2>{{$designers['active']}}</h2>
                        </div>
                      </a>
                      <a href="{{route('manager.designer.index')}}">
                        <div class="order desaigner">
                            <h4>Desaigner banned</h4>
                            <h2>{{$designers['banned']}}</h2>
                        </div>
                      </a>
                      <a href="#">
                        <div class="order total">
                            <h4>Total</h4>
                            <h2>{{$designers['total']}}</h2>
                        </div>
                      </a>
                  </div>
              </article>
          </div>
      </div>
      @endcan
    </div>
    <!-- akhir wrapper -->
  </div>
  <!--  -->
@endsection


@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/admin/js_files/nav-responsive.js') }}"></script>
@endsection