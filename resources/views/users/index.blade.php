@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> All Designers</div>

                <div class="card-body">

                    @component('components.who')
                    @endcomponent

                    You are logged in!
                </div>
            </div>

            @forelse($users as $user)
                <div class="card">
                    <div class="card-header">{{ $user->name }} : {{ $user->email }}</div>

                    <div class="card-body">
                        @empty($user->photo)
                            <p>no image</p>
                        @else
                            <img src="{{ $user->photo }}" width="200">
                        @endempty
                        <p>{{ $user->phone }}</p>
                        {{-- <p> total designs : {{ $user->designs_count }}</p> --}}
                        
                        <a href="{{ url('admin/users/'.$user->id) }}">info lengkap designs yg dikerjakan</a>
                    </div>
                    <div class="class-footer">
                        @if(empty($user->deleted_at))
                            <a href="{{ url('admin/users/edit/'.$user->id) }}" class="btn btn-warning">Edit User</a>
                            <form style="float:right" method="POST" action="{{ url('admin/users/'.$user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        @else
                            <form style="float:left" method="POST" action="{{ url('admin/users/'.$user->id) }}">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-success" type="submit">Restore</button>
                            </form>
                            <form style="float:right" method="POST" action="{{ url('admin/users/force/'.$user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Permanent Delete</button>
                            </form>
                        @endif
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        <p> No Users . </p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection
