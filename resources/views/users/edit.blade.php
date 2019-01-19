@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <div class="card-header"><strong>Edit Profile</strong></div>

                        <div class="card-body">
                            <form method="POST" action="{{ url('admin/users/'.$user->id) }}" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter user name (designer name) " 
                                    value="@php 
                                        if (old('name')){ echo old('name'); } else { echo $user->name; }
                                        @endphp" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('name') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter user email (designer email) " 
                                    value="@php 
                                        if (old('email')){ echo old('email'); } else { echo $user->email; }
                                        @endphp" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('email') }}</p>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter user phone (designer phone) " 
                                    value="@php 
                                        if (old('phone')){ echo old('phone'); } else { echo $user->phone; }
                                        @endphp" required autofocus>
                                </div>
                                @if ($errors->has('phone'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('phone') }}</p>
                                    </div>
                                @endif
                                
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="photo" id="photo" placeholder="Enter photo for designer " value="{{ old('photo') }}" autofocus>
                                </div>
                                @if ($errors->has('photo'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('photo') }}</p>
                                    </div>
                                @endif
                                
                                <button class="btn btn-primary" type="Submit" >Edit Designer Data</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection