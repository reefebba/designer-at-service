@extends("layouts/dashboard_template")

@section("content")
  <div>
    <table class="table">
      <thead>
        <tr>
          <th>Name Designer</th>
          <th>Jumlah Design</th>
        </tr>
      </thead>
      <tbody>
      @forelse ($userx->toArray() as $user)
        <tr>
          <td>{{$user['name']}}</td>
          <td>{{$user['designs_count']}}</td>
          <td><a href="{{route("admin.user.show",["user" => $user['id']])}}">Show</a></td>
        </tr>
      @empty

      @endforelse
      </tbody>
    </table>
  </div>
@endsection
