@extends('layouts.masterclient')

@section('title','show')

@section('content')

@include('client.component.sidebarclient')

@include('client.component.headerclient')

	<div class="row justify-content-center">
		<div class="col-md-6">

			<div class="form-group">
				
				<div class="card" style="width: 35rem;">
				  <div class="card-body">
				    <h5 class="card-title"><h3>Client :</h3></h5>
				    <p class="card-text"><label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Client : {{ $design->client->client_name }}</span></i></label></p>
				    <p class="card-text"><label for="uuid"><i class="fas fa-bookmark"><span class="ml-2" style="font-family:ubuntu;"> Code : {{ $design->uuid }}</span></i></label></p>
				  
				    <div class="alert alert-success" role="alert">
					  code bisa dimasukan pada form check status di homepage. Harap disimpan.
					</div>
				   </div>
				</div><br>	

				<div class="card" style="width: 35rem;">
				 <div class="card-body">
				    <h5 class="card-title"><h3>Kajian :</h3></h5>
				    <p class="card-text">
				    	<label for="type"><i class="fas fa-book-open"><span class="ml-2" style="font-family:ubuntu;"> Tipe : {{ $design->lecture->type }}</span></i></label>
					</p>
				    <p class="card-text">
				    	<label for="title"><i class="fas fa-elementor"><span class="ml-2" style="font-family:ubuntu;"> Judul : {{ $design->lecture->title }}</span></i></label></p>
				    <p class="card-text">
				    	<label for="lecturer"><i class="fas fa-chalkboard-teacher"><span class="ml-2" style="font-family:ubuntu;"> Pemateri : {{ $design->lecture->lecturer }}</span></i></label>
					</p>
				    <p class="card-text">
				    	<label for="organizer"><i class="fas fa-tools"><span class="ml-2" style="font-family:ubuntu;"> Organizer : {{ $design->lecture->organizer }}</span></i></label>
					</p>
					<p class="card-text">
						<label for="date"><i class="fas fa-calendar"><span class="ml-2" style="font-family:ubuntu;"> Tangal : {{ $design->lecture->date }}</span></i></label>
					</p>
					<p class="card-text">
						 <label for="time"><i class="fas fa-clock"><span class="ml-2" style="font-family:ubuntu;"> Pukul : {{ $design->lecture->time }}</span></i></label>
						
				     </p>
				</div>
			</div>
				<br>
				<div class="card" style="width: 35rem;">
				  <div class="card-body">
				    <h5 class="card-title"><h3>Design Poster :</h3></h5>
				    <p class="card-text">
				    	<label for="status"><i class="fas fa-calendar-check"><span class="ml-2" style="font-family:ubuntu;"> Status : {{ $design->status }}</span></i></label>
				    </p>
				    <p class="card-text">
				    	<label for="designer"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Dikerjakan oleh : {{ $design->designer->name }}</span></i></label>

				    </p>
				    <p class="card-text">
				    	<label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster : {{ $design->size }}</span></i></label>

				    </p>
				    <p class="card-text">
				    	<label for="base_color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar : {{ $design->base_color }}</i></span></i></label>

				    </p>
				    <p class="card-text">
				    	<label for="add_info"><i class="fas fa-info-circle"><span class="ml-2" style="font-family:ubuntu;"> Info Tambahan : {{ $design->add_info }}</i></span></i></label>
				    </p>

				    <p class="card-text">
				    	<label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;">gambar tambahan :</span></i></label>
				    	<br>
					<img class="card-img-top" src="{{ url('storage/'.$design->image) }}" width="200">
				    </p>
				   </div>
					<br>
					<form action="{{ route('homepage') }}">
					    <div class="form-group text-center">
					       <button class="btn btn-primary" type="submit">Ok, Kembali!</button> 
					    </div>
					</form>
			</div>	
		</div>

	</div>
@endsection