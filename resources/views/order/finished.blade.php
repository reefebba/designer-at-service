@extend("order.order_template")

@section("title", "Order Yang Sudah Selesai")

@section("container")

  @forelse (design as designs)
    <div class="col-md-4 mb-5">
      <div class="order-card mx-auto">
          <input class="btn-detail-order" type="checkbox" name="" >
          <div class="toggle"><i class="fas fa-info"></i></div>
          <a href="#" class="link-detail-order mx-3" data-toggle="modal" data-target="#detail-order">Detail</a>
        <div class="short-desc mx-3 mt-3">
          <h5 class="order-id">{{ design->jenis_kajian }}</h5>
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
  @empty

  @endforelse

@endsection
