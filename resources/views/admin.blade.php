@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">

                    @component('components.who')
                    @endcomponent

                    You are logged in, Admin!

                    <p>
                        <a href="{{ route('admin.design.open') }}"> Daftar Design dengan status OPEN </a>
                    </p>
                    <p>
                        <a href="{{ route('admin.design.inprogress') }}"> Daftar Design dengan status IN PROGRESS </a>
                    </p>
                    <p>
                        <a href="{{ route('admin.design.finished') }}"> Daftar Design dengan status FINISHED </a>
                    </p>
                    <p>
                        <a href="{{ route('admin.user.index') }}"> Daftar Designers </a>
                    </p>
                    <p>
                        <a href="{{ route('admin.user.trashed') }}"> Daftar Designers yg dihapus </a>
                    </p>
                    <p>
                        <a href="{{ url('admin/profile/'.auth()->guard('admin')->user()->id) }}"> Lihat Profile Admin </a>
                    </p>
                    <p>
                        <a href="{{ url('admin/edit/'.auth()->guard('admin')->user()->id) }}"> Update Profile Admin </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
