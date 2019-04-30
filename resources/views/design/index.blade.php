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

        @if (count($designs) === 0)
          Tidak ada Project!
        @endif

        <!-- Open -->
        <div class="container mt-5 mx-auto">
          <div class="row">
            @foreach($designs as $design)
            <div class="col-md-4 mb-5">
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

            <!-- Modal -->
            <!-- <div class="modal fade" id="detail-order" tabindex="-1" role="dialog" aria-labelledby="detail-orderTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="detail-orderTitle">Detail Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
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
                      <p>Jumlah Jamaah</p>
                      <p>Info Donasi</p>
                      <p>Menu Buka Puasa</p>
                      <p>Siaran Streaming</p>
                      <p>File Gambar</p>
                      <p>Ukuran</p>
                      <p>Warna Dasar</p>
                      <p>Pesan Tambahan Untuk Desainer</p>
                    </div>

                    <div class="w-100">
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                      <p>:</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>

          


    </div>
  <!-- akhir wrapper -->
  </div>
  <!--  -->
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('/js/admin/js_files/nav-responsive.js') }}"></script>
@endsection
