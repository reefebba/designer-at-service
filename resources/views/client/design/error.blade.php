@extends('layouts.masterclient')

@section('title')
Order show
@endsection

@section('content')

@include('client.component.sidebarclient')

@include('client.component.headerclient')

<div class="row justify-content-center col-md-12">
	<div class="header">
		<div class="waveheader top">
			<img src="{{asset('/images/wave1.png')}}">
		</div>
	</div>
	<div class="form-group">
		<div class="error text-center">
			<h1>Code Unik Antum tidak ditemukan!</h1>
			<h2>Silakan Antum cek kembali!</h2>
			<a href="{{route('homepage')}}" class="btn btn-primary">Jazakallahukhairan</a>
		</div>
	</div>
	<footer>
		<div class="wavefooter bottom">
			<img src="{{asset('/images/wave2.png')}}">
		</div>
	</footer>
</div>


@endsection