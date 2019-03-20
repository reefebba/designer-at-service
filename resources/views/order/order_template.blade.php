@extend("dashboard_template")

@section("content"")
<div class="grid-container">
  <div class="row-top">
    <header>
      <div class="word-top">
        <!-- ubah kata ADMIN sesuai nama link halaman yang sedang dibuka -->
        <div class="my-auto py-0 d-flex align-items-center">
          <button class="btn btn-navOpen mr-2" id='nav-open' >
            <i class="fas fa-bars"></i>
          </button>
          <h2 class="my-auto ml-3">
            @yield("title")
          </h2>
        </div>
        <!--  -->
        <a class="admin-profile" href="{{route('admin.index')}}">
          <i class="fas fa-user-circle fa-4x"></i>
        </a>
      </div>
    </header>
  </div>

  <div class="container mt-5 mx-auto">
    <div class="row">
      @section("container")
        <div class="order-card mx-auto">
            <input class="btn-detail-order" type="checkbox" name="" >
            <div class="toggle"><i class="fas fa-info"></i></div>
            <a href="#" class="link-detail-order mx-3" data-toggle="modal" data-target="#detail-order">Detail</a>
          <div class="short-desc mx-3 mt-3">
            <h5 class="order-id">Jenis Kajian</h5>
            <h5 class="order-id">Judul Kajian</h5>
            <h5 class="order-id">Pemateri</h5>
            <hr>
            <h5 class="order-id">Desainer</h5>
          </div>
          <div class="detail-order mt-2 mx-3">
            <p>Tempat</p>
            <p>Tanggal</p>
            <p>Waktu</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
