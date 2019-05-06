@extends('layouts.masterclient')

@section('title')
Order show
@endsection

@section('content')

@include('client.component.sidebarclient')

@include('client.component.headerclient')

<div class="row justify-content-center col-md-12">
	<div class="">
		<div class="form-group">
			<h2 class="text-center">Pesanan anda</h2>
			<!-- client -->
			<div class="card mt-3 shadow" style="width: 35rem;">
				<div class="card-body">
					<h4 class="card-title"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"><u>Client</u></span></i></h4>
					<p class="card-text"><label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Antum : {{ $design->client->client_name }}</span></i></label></p>
					<p class="card-text"><label for="uuid"><i class="fas fa-bookmark"><span class="ml-2" style="font-family:ubuntu;"> Code Unik: <b class="text-danger">{{ $design->code }}</b> </span></i></label></p>
					<div class="alert alert-success" role="alert">
						Code Unik tersebut bisa dimasukan pada form check status di homepage. Harap disimpan.
					</div>
				</div>
			</div>

			<!-- kajian -->
			<div class="card mt-5 shadow" style="width: 35rem;">
				<div class="card-body">

					<h4 class="card-title"><i class="fas fa-mosque"><span class="ml-2" style="font-family:ubuntu;"><u>Kajian</u></span></i></h4>
					<p class="card-text">
						<label for="type">
							<i class="fas fa-book-open">
								<span class="ml-2" style="font-family:ubuntu;"> Tipe : {{ $design->lecture->type }}
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="title">
							<i class="fas fa-elementor">
								<span class="ml-2" style="font-family:ubuntu;"> Judul : {{ $design->lecture->title }}
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="lecturer">
							<i class="fas fa-chalkboard-teacher">
								<span class="ml-2" style="font-family:ubuntu;"> Pemateri : {{ $design->lecture->lecturer }}
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="organizer">
							<i class="fas fa-tools">
								<span class="ml-2" style="font-family:ubuntu;"> Organizer : {{ $design->lecture->organizer }}
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="date">
							<i class="fas fa-calendar">
								<span class="ml-2" style="font-family:ubuntu;"> Tanggal : {{ $design->lecture->date }}
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="time">
							<i class="fas fa-clock">
								<span class="ml-2" style="font-family:ubuntu;"> Jam : {{ $design->lecture->time }}
								</span>
							</i>
						</label>
					</p>
				</div>
			</div>

			<!-- Design poster -->
			<div class="card mt-5 shadow" style="width: 35rem;">
				<div class="card-body">

					<h4 class="card-title"><i class="fas fa-pencil-ruler"><span class="ml-2" style="font-family:ubuntu;"><u>Design Poster</u></span></i></h4>
					<p class="card-text">
						<label for="status">
							<i class="fas fa-calendar-check">
								<span class="ml-2" style="font-family:ubuntu;">
								 Status : 
								@if($design->status == 'open')
								Belum dikerjakan
								@elseif($design->status == 'in-progress')
								Sedang dikerjakan
								@elseif($design->status == 'finished')
								Selesai dikerjakan
								@else
								Design digagalkan
								@endif
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="designer">
							<i class="fas fa-user">
								<span class="ml-2" style="font-family:ubuntu;">
									Dikerjakan oleh : 
									@if($design->designer->designer_id != '')
										Design Antum belum dikerjakan
									@else
										{{ $design->designer->name }}
									@endif
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="size">
							<i class="fas fa-scroll">
								<span class="ml-2" style="font-family:ubuntu;">Size / ukuran poster : {{ $design->size }}
								</span>
							</i>
						</label>

					</p>

					<p class="card-text">
						<label for="base_color">
							<i class="fas fa-palette">
								<span class="ml-2" style="font-family:ubuntu;"> Warna dasar : {{ $design->base_color }}
								</span>
							</i>
						</label>

					</p>

					<p class="card-text">
						<label for="add_info">
							<i class="fas fa-info-circle">
								<span class="ml-2" style="font-family:ubuntu;">
									Info Tambahan : 
									@if($design->add_info != '')
										{{ $design->add_info }}
									@else
										Antum tidak mengirimkan pesan apa-apa
									@endif
								</span>
							</i>
						</label>
					</p>

					<p class="card-text">
						<label for="image">
							<i class="fas fa-image">
								<span class="ml-2" style="font-family:ubuntu;">
								Gambar tambahan :
								</span>
								</i>
							</label>
						@if($design->image != '')
						<br>

						<img class="card-img-top" src="{{ $design->image }}" width="200">
						@else
							<span class="ml-2" style="font-family:ubuntu;"><b>Antum tidak mengirimkan gambar</b></span>
						@endif
					</p>
				</div>

				<!-- Button -->
				<form action="{{ route('homepage') }}">
					<div class="form-group text-center">
						<button class="btn btn-primary" type="submit">Kembali, Jazakallahu khairan</button> 
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
@endsection