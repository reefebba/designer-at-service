@extends('layouts.master')

@section('links')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin_dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive_navbar.css') }}">

@endsection

@section('title')
Design
@endsection

@section('contents')
<!-- tambah wrapper -->
<div class="wrapper">

  @include('manager.component.sidebar')


  <div class="grid-container">
    <!-- Header -->
    @section('nav-title')

    Designs
    
    @endsection
    @include('manager.component.header')
    <!-- End header -->

    
    @if (count($designs) === 0)
    <div class="container mt-5">
      <div class="alert alert-success" role="alert">
        <p class="alert-heading">Notice!</p>
        <hr>
        <h4>There is no task!</h4>
      </div>
    </div>
    @endif
    

    <!-- Open -->
    <div class="container mt-5 mx-auto">
      <div class="row">
        @foreach($designs as $design)
        <div class="col-md-4 mb-5">
          <div class="order-card mx-auto">
            <input class="btn-detail-order" type="checkbox" name="" >
            <div class="toggle"><i class="fas fa-info"></i></div>
            <a href="{{route('manager.design.show', $design)}}" class="link-detail-order mx-3">Detail</a>
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
      {{$designs->links()}}
    </div>

    


  </div>
  <!-- akhir wrapper -->
</div>
<!--  -->
@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/js/nav-responsive.js') }}"></script>
@endsection
