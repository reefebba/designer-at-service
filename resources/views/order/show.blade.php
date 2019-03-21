@extends('layouts.app_layout')

@section('article')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Open Design</div>

                <div class="card-body">

                    <p>kode pesanan: {{ $design->id }} --ditulis url/designs/kode</p>
                    <p>{{ $design->status }}</p>
                    @if ($design->user)
                    <p>dikerjakan oleh {{ $design->user->name }}</p>
                    @else
                    <p>belum ada designer yang mengerjakan</p>
                    @endif
                    <p>{{ $design->client }}</p>
                    <p>{{ $design->client_phone }}</p>
                    @empty($design->image)
                        <p>no image</p>
                    @else
                        <img src="{{ $design->image }}" width="200">
                    @endempty
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

                    @unless (Auth::check())
                        You are not signed in.
                    @endunless
                    @auth('web')
                        <a class="btn btn-primary" href="{{ route('designer.design.index') }}"> Back </a>
                    @endauth
                    @auth('admin')
                        <a class="btn btn-primary" href="{{ route('admin.home') }}"> Home </a>
                    @endauth
                </div>
                <div class="card-footer">
                    @auth('web')
                        @empty($design->user_id)
                            <form style="float:right" method="POST" action="{{ route('designer.design.take', ['design' => $design->id]) }}">
                                @csrf
                                <input type="hidden" name="status" value="in progress">

                                <button class="btn btn-primary" type="submit">Take !</button>
                            </form>
                        @elseif($design->status !== 'finished')
                        @can('update', $design)
                            <form style="float:right" method="POST" action="{{ route('designer.design.finish', ['design' => $design->id]) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="finished">

                                <button class="btn btn-success" type="submit">Finish !</button>
                            </form>
                            <form style="float:left" method="POST" action="{{ route('designer.design.drop', ['design' => $design->id]) }}">
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
