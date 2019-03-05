@extends("layouts/dashboard_template")

@section("title", "Home")

@section("content")
<div class="row-middle page-body">
  <div class="page-content">
    <article>
      <ol class="order-box">
        <li class="order">
          <a>
            <h4>Jumlah Pesanan</h4>
          </a>
        </li>
        <li class="order">
          <a>
            <h4>Dalam Antrian</h4>
          </a>
        </li>
        <li class="order">
          <a>
            <h4>Order Dikerjakan</h4>
          </a>
        </li>
        <li class="order">
          <a>
            <h4>Order Selesai</h4>
          </a>
        </li>
      </ol>
    </article>
  </div>
</div>
@endsection
