@extends('layouts.masterclient')
@section('title','Pondok Multimedia')

 {{-- Content --}}
@section('content')
  
  {{-- Sidebar --}}
    @include('component.client.sidebarclient')
  {{-- End Sidebar --}}
  
  {{-- Navbar --}}
    @include('component.client.headerclient')

  {{-- Form: Check Status, Redirecting --}}
    @include('component.client.formcheck')  
  {{-- End Form: Check Status, Redirecting --}}
  
  {{-- Form: Submit Design --}}
     @include('component.client.formsubmit') 

@endsection