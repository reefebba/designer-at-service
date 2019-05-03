@extends('layouts.masterclient')

@section('title')
  Pondok Multimedia
@endsection

@section('content')

  @include('client.component.sidebarclient')
  @include('client.component.headerclient')


  @include('client.component.formcheck')
  @include('client.component.formsubmit') 

@endsection
