@extends("layouts/dashboard_template")

@section("content")
<div class="row" style="padding: 20px">
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h2>Hallo {{$user->name}}</h2>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <p>Jumlah Proyek Desain yang di kerjakan</p>
        <b>
          <?php echo count($user->designs
          ->filter(
            function($val) {
              return $val->status == "in progress";
            }
          )) ?>
        </b>
        <p>Jumlah Proyek Desain yang terselesaikan</p>
        <span class="text-center" style="font-height: 800"><p>
          <?php echo count($user->designs
          ->filter(
            function($val) {
              return $val->status == "finished";
            }
          )); ?>
        </p>
        </span>
      </div>
    </div>
  </div>
</div>
@endsection
