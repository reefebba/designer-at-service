@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Open Design</div>

                <div class="card-body">

                    @component('components.who')
                    @endcomponent

                    You are logged in!
                </div>
            </div>

            @forelse($designs as $design)
                <div class="card">
                    <div class="card-header">{{ $design->type }} : {{ $design->title }}</div>

                    <div class="card-body">
                    
                        <p>{{ $design->tagline }}</p>
                        <p>{{ $design->lecturer }}</p>
                        <p>{{ $design->audience }}</p>
                        <p>{{ $design->place }}</p>
                        <p>{{ $design->date }}</p>
                        <p>{{ $design->time }}</p>
                        <p>{{ $design->organizer }}</p>
                    
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
