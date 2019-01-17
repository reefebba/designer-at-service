@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Open Design</div>

                <div class="card-body">
                    
                    <p>{{ $design->status }}</p>
                    <p>{{ $design->client }}</p>
                    <p>{{ $design->client_phone }}</p>
                    <p>{{ $design->image }}</p>
                    <p>{{ $design->size }}</p>
                    <p>{{ $design->base_color }}</p>
                    <p>{{ $design->type }}</p>
                    <p>{{ $design->title }}</p>
                    <p>{{ $design->tagline }}</p>
                    <p>{{ $design->lecturer }}</p>
                    <p>{{ $design->audience }}</p>
                    <p>{{ $design->book }}</p>
                    <p>{{ $design->place }}</p>
                    <p>{{ $design->date }}</p>
                    <p>{{ $design->time }}</p>
                    <p>{{ $design->organizer }}</p>
                    <p>{{ $design->contact }}</p>
                    <p>{{ $design->donation }}</p>
                    <p>{{ $design->add_info }}</p>
                    <p>{{ $design->is_meal }}</p>
                    <p>{{ $design->is_streaming }}</p>
                    

                    @component('components.who')
                    @endcomponent

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
