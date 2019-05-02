@extends('layouts.master')

@section('links')

<link rel="stylesheet" type="text/css" href="{{ asset('/css/admin_dashboard.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/responsive_navbar.css') }}">

@endsection

@section('title')
Design detail
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

      @if($design->status == 'open')
    Open Design
    @endif
      @if($design->status == 'in-progress')
    In Progress Design
    @endif
      @if($design->status == 'finished')
    Finished Design
    @endif
      @if($design->status == 'failed')
    Failed Design
    @endif
    
    @endsection

    @include('manager.component.header')
    <!-- End header -->

    <div class="container mt-5 mx-auto">
      <div class="row">
        <div class="col-md-12 mb-5">
          <div class="detailorder">
            <a href="/designer/design/{{$design->id}}" class="link-detail-order mx-3">Detail</a>
            <div class="modal-body d-flex">
              <div class="w-100">
                <p>Jenis Kajian</p>
                <p>Judul Kajian</p>
                <p>Pemateri</p>
                <p>Tagline</p>
                <p>Tempat</p>
                <p>Tanggal</p>
                <p>Waktu</p>
                <p>Organisasi</p>
                <p>Klien</p>
                <p>Kontak Klien</p>
                <p>Info Donasi</p>
                <p>Menu Buka Puasa</p>
                <p>Siaran Streaming</p>
                <p>Ukuran</p>
                <p>Warna Dasar</p>
                <p>Pesan Tambahan Untuk Desainer</p>
                <p>File Gambar</p>
              </div>

              <div class="w-100">
                <p>: {{$design->lecture->type}} </p>
                <p>: {{$design->lecture->title}} </p>
                <p>: {{$design->lecture->lecturer}} </p>
                <p>: {{$design->lecture->tag_line}} </p>
                <p>: {{$design->lecture->place}} </p>
<<<<<<< HEAD
                <p>: {{$design->lecture->date->format('d - m - Y')}} </p>
=======
                <p>: {{$design->lecture->date}} </p>
>>>>>>> be7a2608a6dc3e58a1ce78cd5aa5f8504cca3565
                <p>: {{$design->lecture->time}} </p>
                <p>: {{$design->lecture->organizer}} </p>
                <p>: {{$design->client->client_name}} </p>
                <p>: {{$design->client->client_phone}} </p>
                <p>: {{$design->lecture->donation}} </p>
                @if($design->lecture->is_meal == '1')
                <p>: Ya, ada </p>
                @else
                <p>: Tidak ada</p>
                @endif

                @if($design->lecture->is_streaming == '1')
                <p>: Ya, ada</p>
                @else
                <p>: Tidak ada</p>
                @endif
                <p>: {{$design->size}} </p>
                <p>: {{$design->base_color}} </p>
                @if($design->add_info == 'Nullable')
                <p>: Tidak ada pesan apa-apa </p>
                @else
                <p>: {{$design->add_info}}</p>
                @endif
                : <img src="{{url('storage/'.$design->image)}}" width="180" class="shadow">
                <br>
                <a href="{{route('design.download', $design)}}" class="mt-3 ml-5 btn btn-primary">Download</a>
              </div>
            </div>

            <div class="btn-condition">
              @if($design->status == 'open')
              <form method="POST" action="/design/{{$design->uuid}}/take">
                @csrf
                @method('PUT')
                <button class="m-2 btn btn-primary">Take</button>
              </form>
              @endif

              @if($design->status == 'in-progress')
              <form method="POST" action="/design/{{$design->uuid}}/drop">
                @csrf
                <button class="m-2 btn btn-warning">Drop</button>
              </form>
              <form method="POST" action="/design/{{$design->uuid}}/finish">
                @csrf
                <button  class="m-2 btn btn-success">Finish</button>
              </form>
              <form method="POST" action="/design/{{$design->uuid}}/fail">
                @csrf
                <button class="m-2 btn btn-danger">Fail</button>
              </form>
              @endif
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('/js/nav-responsive.js') }}"></script>
@endsection