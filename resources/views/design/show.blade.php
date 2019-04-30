@extends('layouts.master')

@section('links')

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/admin_dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/admin/css_files/responsive_navbar.css') }}">

@endsection

@section('title')
  
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
            Design
          @endsection

          @include('component.header')
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
                      <p>File Gambar</p>
                      <p>Ukuran</p>
                      <p>Warna Dasar</p>
                      <p>Pesan Tambahan Untuk Desainer</p>
                    </div>

                    <div class="w-100">
                      <p>: {{$design->lecture->type}} </p>
                      <p>: {{$design->lecture->title}} </p>
                      <p>: {{$design->lecture->lecturer}} </p>
                      <p>: {{$design->lecture->tag_line}} </p>
                      <p>: {{$design->lecture->place}} </p>
                      <p>: {{$design->lecture->date}} </p>
                      <p>: {{$design->lecture->time}} </p>
                      <p>: {{$design->lecture->organizer}} </p>
                      <p>: {{$design->client->client_name}} </p>
                      <p>: {{$design->client->client_phone}} </p>
                      <p>: {{$design->lecture->donation}} </p>
                      <p>: {{$design->lecture->is_meal}} </p>
                      <p>: {{$design->lecture->is_streaming}} </p>
                      <p>: {{$design->image}} </p>
                      <p>: {{$design->size}} </p>
                      <p>: {{$design->base_color}} </p>
                      <p>: {{$design->add_info}} </p>
                    </div>
              </div>

              <div class=""></div>
              @if($design->status == 'open')
                <form method="POST" action="/design/{{$design->uuid}}/take">
                  @csrf
                  @method('PUT')
                  <button class="btn btn-primary">Take</button>
                </form>
              @endif

              @if($design->status == 'in-progress')
                <form method="POST" action="/design/{{$design->uuid}}/drop">
                  @csrf
                <button class="btn btn-warning">Drop</button>
                </form>
                <form method="POST" action="/design/{{$design->uuid}}/finish">
                  @csrf
                  <button  class="btn btn-success">Finish</button>
                </form>
                <form method="POST" action="/design/{{$design->uuid}}/fail">
                  @csrf
                  <button class="btn btn-danger">Fail</button>
                </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/admin/js_files/nav-responsive.js') }}"></script>
@endsection