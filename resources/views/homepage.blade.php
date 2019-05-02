@extends('layouts.masterclient')
@section('title','Pondok Multimedia')

 {{-- Content --}}
@section('content')
  
  {{-- Sidebar --}}

    @include('client.component.sidebarclient')
  {{-- End Sidebar --}}
  
  {{-- Navbar --}}
    @include('client.component.headerclient')

  {{-- Form: Check Status, Redirecting --}}
    @include('client.component.formcheck')  
  {{-- End Form: Check Status, Redirecting --}}
  
  {{-- Form: Submit Design --}}
     @include('client.component.formsubmit') 

@endsection
