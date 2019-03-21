@extends("layouts/dashboard_template")

@section("content")
<div class="col-sm-10 mt-5" style="margin: auto">
  <div class="card mg-auto">
    <div class="card-header">
      <h6>{{$user->name}} profile</h6>
      <ul class="float-right">
        <li>
          <button type="button" class="btn btn-primary">Edit</button>
        </li>
        <li>
          <button type="button" class="btn btn-warning">Ban</button>
        </li>
        <li>
          <button type="button" class="btn btn-danger">Hapus Permanent</button>
        </li>
      </ul>
    </div>
    <div class="card-body">
      <div>
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
      </div>
    </div>
  </div>

</div>
@endsection
