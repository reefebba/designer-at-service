@extends("layouts/order_template")

@section("title", "Order Berjalan")

@section("container")

  @forelse ($designs as $design)
    <div class="col-md-4 mb-5">
      <div class="order-card mx-auto">
        <div class="short-desc mx-3 mt-3">
          <h5 class="order-id">Jenis Kajian : </h5>
          <p>{{$design->user->name}}</p><br>
          <hr>
          <h5 class="order-id">Jenis Kajian : </h5>
          <p>{{$design->type}}</p><br>
          <h5 class="order-id">Judul Kajian : </h5>
          <p>{{$design->title}}<p><br>
          <h5 class="order-id">Pemateri : </h5>
          <p>{{$design->lecturer}}</p><br>
          <h5 class="order-id">Tanggal : </h5>
          <p>{{ $design->date }}</p><br>
          <hr>
        </div>
        <div>
          <a href="{{route('design.show', ['design' => $design->id])}}">
            <button type="button" class="btn order-button">Detail</button>
          </a>
        </div>
      </div>
    </div>
  @empty
    <h1>There is No Orders</h1>
  @endforelse

@endsection
