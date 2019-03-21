
@extends("layouts/order_template")

@section("title", "Design yang sudah selesai")

@section("container")
  @forelse ($designs as $design)
    <div class="col-md-4 mb-5">
      <div class="order-card mx-auto">
        <div class="short-desc mx-3 mt-3">
          <h5 class="order-id">Jenis Kajian : </h5>
          <p>{{$design->type}}</p><br>
          <h5 class="order-id">Judul Kajian : </h5>
          <p>{{$design->title}}<p><br>
          <h5 class="order-id">Pemateri : </h5>
          <p>{{$design->lecturer}}</p><br>
          <hr>
          <h5 class="order-id">Tempat : </h5>
          <p>{{ $design->place }}</p><br>
          <h5 class="order-id">Tanggal : </h5>
          <p>{{ $design->date }}</p><br>
          <h5 class="order-id">Waktu : </h5>
          <p><?= date('G:i', strtotime($design->time)) ?></p>
        </div>
        <div>
          <a href="{{route('design.show', ['design' => $design->id])}}">
            <button type="button" class="btn order-button">Detail</button>
          </a>
        </div>
      </div>
    </div>
  @empty
    <h1>Belum ada design yang terselesaikan</h1>
  @endforelse
@endsection
