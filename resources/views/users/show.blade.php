@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $user->name }} : {{ $user->email }} </div>

                <div class="card-body">
                    <img src="{{ $user->photo }}" width="200">
                    <p>{{ $user->phone }}</p>
                    {{-- <p> Total designs : {{ $user->designs_count }}</p> --}}

                    @component('components.who')
                    @endcomponent

                    You are logged in!
                </div>
                <div class="class-footer">
                    <a href="edit/{{$user->id}}" class="btn btn-warning">Edit User</a>
                    <form style="float:right" method="POST" action="admin/user/{{$user->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>

            @forelse($user->designs as $design)
                <div class="card">
                    <div class="card-header">{{ $design->type }} : {{ $design->title }}</div>

                    <div class="card-body">
                        @auth('admin')
                            <p>dikerjakan oleh {{ $design->user->name }}</p>
                        @endauth
                        <p>{{ $design->tagline }}</p>
                        <p>{{ $design->lecturer }}</p>
                        <p>{{ $design->audience }}</p>
                        <p>{{ $design->place }}</p>
                        <p>{{ $design->date }}</p>
                        <p>{{ $design->time }}</p>
                        <p>{{ $design->organizer }}</p>
                        <a href="{{ url('designs/'.$design->id) }}">info lengkap</a>
                    </div>
                </div>
            @empty
                <div class="card">
                    <div class="card-body">
                        <p> No Orders . </p>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
</div>
@endsection
