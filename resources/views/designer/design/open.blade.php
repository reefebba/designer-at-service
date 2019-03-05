@extends("layouts/order_template")

@section('title', 'Antrian Desain')

@section("container")
  @forelse ($designs as $design)
    <div class="col-md-4 mb-5">
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
        <div>
          <a href="#">
            <button type="button">Detail</button>
          </a>
          <button type="submit">Apply</button>
        </div>
      </div>
    </div>
  @empty
    <h1>There is No Orders</h1>
  @endforelse
@endsection
