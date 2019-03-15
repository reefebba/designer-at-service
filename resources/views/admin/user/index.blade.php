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
      @forelse ($users as $user)
        <tr>
          <td>{{$user['name']}}</td>
          <td>{{$user['designs']}}</td>
        </tr>
      @empty
      @endforelse
      </tbody>
    </table>
  </div>
@endsection
