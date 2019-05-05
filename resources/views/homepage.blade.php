@extends('layouts.masterclient')

@section('title')
  Pondok Multimedia
@endsection

@section('content')

  @include('client.component.headerclient')

  <div class="wrapper">
  @include('client.component.textcontent')
  @include('client.component.formcheck')
  @include('client.component.formsubmit') 
 </div>
@endsection
