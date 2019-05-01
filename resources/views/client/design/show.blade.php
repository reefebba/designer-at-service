@extends('layouts.masterclient')

@section('title','show')

@section('content')

<div class="form-group">
<h3>Client:</h3>

	<label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Client : {{ $design->client->client_name }}</span></i></label>

<h3>Kajian:</h3>

	<label for="type"><i class="fas fa-book-open"><span class="ml-2" style="font-family:ubuntu;"> Tipe : {{ $design->lecture->type }}</span></i></label>

	<label for="title"><i class="fas fa-elementor"><span class="ml-2" style="font-family:ubuntu;"> Judul : {{ $design->lecture->title }}</span></i></label>

	<label for="lecturer"><i class="fas fa-chalkboard-teacher"><span class="ml-2" style="font-family:ubuntu;"> Pemateri : {{ $design->lecture->lecturer }}</span></i></label>

	<label for="organizer"><i class="fas fa-tools"><span class="ml-2" style="font-family:ubuntu;"> Organizer : {{ $design->lecture->organizer }}</span></i></label>

	<label for="date"><i class="fas fa-calendar"><span class="ml-2" style="font-family:ubuntu;"> Waktu : {{ $design->lecture->date }}</span></i></label>

	<label for="place"><i class="fas fa-place-of-worship"><span class="ml-2" style="font-family:ubuntu;"> Tempat : {{ $design->lecture->place }}</span></i></label>

<h3>Design Poster:</h3>

	<label for="status"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Status : {{ $design->status }}</span></i></label>

	<label for="designer"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Dikerjakan oleh : {{ $design->designer->name }}</span></i></label>

	<label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster : {{ $design->size }}</span></i></label>

	<label for="base_color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar : {{ $design->base_color }}</i></span></i></label>

	<label for="add_info"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Info Tambahan : {{ $design->add_info }}</i></span></i></label>

	<label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;">gambar tambahan :</span></i></label>
	<img src="{{ url('storage/'.$design->image) }}" width="200">

</div>

@endsection