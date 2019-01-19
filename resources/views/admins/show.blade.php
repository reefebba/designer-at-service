@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $admin->name }} : {{ $admin->email }} </div>

                <div class="card-body">
                    <img src="{{ $admin->photo }}" width="200">
                    <p>{{ $admin->phone }}</p>

                    @component('components.who')
                    @endcomponent

                    You are logged in!
                </div>
                <div class="class-footer">
                    <a href="edit/{{$admin->id}}" class="btn btn-warning">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
