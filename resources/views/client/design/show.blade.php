@extends('layouts.master')

@section('title','show')

@section('content')

<div class="form-group">
 <label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster :{{ $design->size }}</span></i></label>

	<label for="base_color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar :{{ $design->base_color }}</i></span></i></label>

	<label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;">gambar tambahan :{{ $design->image }}</span></i></label>
</div>

@endsection