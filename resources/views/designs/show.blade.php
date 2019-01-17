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
                    <p>{{ $design->id }}</p>
                    
                    
                    @component('components.who')
                    @endcomponent

                    @unless (Auth::check())
                        You are not signed in.
                    @endunless
                </div>
                <div class="card-footer">
                    @auth('web')
                        @empty($design->user_id)
                            <form style="float:right" method="POST" action="/designs/{{$design->id}}">
                                @csrf
                                <input type="hidden" name="status" value="in progress">

                                <button class="btn btn-primary" type="submit">Take !</button>
                            </form>
                        @elseif($design->status !== 'finished')
                        @can('update', $design)
                            <form style="float:right" method="POST" action="/designs/{{$design->id}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="status" value="finished">

                                <button class="btn btn-success" type="submit">Finish !</button>
                            </form>
                            <form style="float:left" method="POST" action="/designs/{{$design->id}}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="open">

                                <button class="btn btn-danger" type="submit">Drop !</button>
                            </form>
                        @endcan
                        @endempty
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
