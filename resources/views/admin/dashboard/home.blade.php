@extends("layouts/dashboard_template")

@section("title", "Home")

@section("content")
<div class="row-middle page-body">
  <div class="page-content">
    <article>
      <div class="order-box">
        <div class="order">
          <h4>Jumlah Pesanan</h4>
        </div>
        <div class="order">
          <h4>Dalam Antrian</h4>
        </div>
        <div class="order">
          <h4>Order Dikerjakan</h4>
        </div>
        <div class="order">
          <h4>Order Selesai</h4>
        </div>
      </div>
    </article>
  </div>
</div>
@endsection
