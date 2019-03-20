@extends("layouts.app_layout")

@section("article")
<div class="card-body">
  <form method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data" class="customer-form">
    @csrf
    <p class="lead text-center">Jika anda ingin mengajukan pembuatan poster gratis silahkan isi formulir di bawah ini.</>
    <input type="hidden" name="status" value="open">
    @if ($errors->has('status'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('status') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Pemesan?</span></i></label>
      <input type="text" class="form-control" name="client" id="client" placeholder="Enter your name for brochure design client " value="{{ old('client') }}" required autofocus>
    </div>
    @if ($errors->has('client'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('client') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="contact"><i class="fas fa-phone"></i><span class="ml-2" style="font-family:ubuntu;"> Nomor Telepon?</span></label>
      <input type="text" class="form-control" name="client_phone" id="client_phone" placeholder="Enter your phone for brochure design client_phone " value="{{ old('client_phone') }}" required autofocus>
    </div>
    @if ($errors->has('client_phone'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('client_phone') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster yang diinginkan?</span></i></label>
      <input type="text" class="form-control" name="size" id="size" placeholder="Enter size for brochure design " value="{{ old('size') }}" required autofocus>
    </div>
    @if ($errors->has('size'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('size') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar yang diinginkan? Click Dibawah-biarkan hitam jika terserah designer-</i></span></i></label>
      <p> Pilih warna dasar atau biarkan terserah designer </p>
      <input type="color" class="form-control" name="base_color" id="base_color" placeholder="Enter base_color for brochure design or let here empty for it being up to designer " value="{{ old('base_color') }}" autofocus>
    </div>
    @if ($errors->has('base_color'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('base_color') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;"> Adakah gambar yang ingin ditambahkan?</span></i></label>
      <input type="file" class="form-control-file" name="image" id="image" placeholder="Enter image for brochure design or let here empty " value="{{ old('image') }}" autofocus>
    </div>
    @if ($errors->has('image'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('image') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="category"><i class="fas fa-book-open"><span class="ml-2" style="font-family:ubuntu;"> Jenis kajian yang akan diadakan?</span></i></label>
      {{ old('type') }}
      <select class="form-control" name="type" id="type" required autofocus>
        <option>kajian rutin</option>
        <option>kajian tematik</option>
        <option>tablig akbar</option>
        <option>safari dakwah</option>
      </select>
    </div>
    @if ($errors->has('type'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('type') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="audience"><i class="fas fa-book-reader"><span class="ml-2" style="font-family:ubuntu;"> Informasi tentang jamaah?</span></i></label>
      <input type="text" class="form-control" name="audience" id="audience" placeholder="Enter audience for your kajian " value="{{ old('audience') }}" required autofocus>
    </div>
    @if ($errors->has('audience'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('audience') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="title"><i class="fab fa-elementor"><span class="ml-2" style="font-family:ubuntu;"> Judul kajian?</span></i></label>
      <input type="text" class="form-control" name="title" id="title" placeholder="Enter a title for your kajian " value="{{ old('title') }}" required autofocus>
    </div>
    @if ($errors->has('title'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('title') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="tagline"><i class="fas fa-tags"><span class="ml-2" style="font-family:ubuntu;"> Tagline dari kajian?</span></i></label>
      <input class="form-control" name="tagline" placeholder="Provide a tagline for your title " value="{{ old('tagline') }}" autofocus>
      </input>
    </div>
    @if ($errors->has('tagline'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('tagline') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="teacher"><i class="fas fa-chalkboard-teacher"><span class="ml-2" style="font-family:ubuntu;"> Ustadz yang mengisi kajian?</span></i></label>
      <input type="text" class="form-control" name="lecturer" id="lecturer" placeholder="Enter lecturer(ustadz) for your kajian " value="{{ old('lecturer') }}" required autofocus>
    </div>
    @if ($errors->has('lecturer'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('lecturer') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="book"><i class="fas fa-book"><span class="ml-2" style="font-family:ubuntu;"> Nama kitab yang dibahas?</span></i></label>
      <input type="text" class="form-control" name="book" id="book" placeholder="Enter book for your kajian or let here empty " value="{{ old('book') }}" autofocus>
    </div>
    @if ($errors->has('book'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('book') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="place"><i class="fas fa-place-of-worship"><span class="ml-2" style="font-family:ubuntu;"> Tempat kajian?</span></i></label>
      <textarea class="form-control" name="place" placeholder="Provide a place for your kajian " rows="3" required autofocus>{{ old('place') }}
      </textarea>
    </div>
    @if ($errors->has('place'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('place') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="date"><i class="fas fa-calendar"><span class="ml-2" style="font-family:ubuntu;"> Tanggal kajian?</span></i></label>
      <input type="date" class="form-control" name="date" id="date" placeholder="Enter date for your kajian " value="{{ old('date') }}" required autofocus>
    </div>
    @if ($errors->has('date'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('date') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="time"><i class="fas fa-clock"><span class="ml-2" style="font-family:ubuntu;"> Pukul berapa kajian dilaksanakan?</span></i></label>
      <input type="time" class="form-control" name="time" id="time" placeholder="Enter time for your kajian " value="{{ old('time') }}" required autofocus>
    </div>
    @if ($errors->has('time'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('time') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="eo"><i class="fas fa-tools"><span class="ml-2" style="font-family:ubuntu;"> Event Organizer kajian?</span></i></label>
      <input type="text" class="form-control" name="organizer" id="organizer" placeholder="Enter organizer for your kajian " value="{{ old('organizer') }}" required autofocus>
    </div>
    @if ($errors->has('organizer'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('organizer') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="telephone"><i class="fas fa-phone-square"><span class="ml-2" style="font-family:ubuntu;"> Kontak kajian yang bisa dihubungi?</span></i></label>
      <input type="text" class="form-control" name="contact" id="contact" placeholder="Enter contact for your kajian: 'fulan:081xxxxxxxxx' " value="{{ old('contact') }}" required autofocus>
    </div>
    @if ($errors->has('contact'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('contact') }}</p>
    </div>
    @endif
    <div class="form-group">
      <label for="donate"><i class="fas fa-donate"><span class="ml-2" style="font-family:ubuntu;"> Adakah informasi tentang donasi?</span></i></label>
      <input type="text" class="form-control" name="donation" id="donation" placeholder="Enter donation account for your kajian or let here empty " value="{{ old('donation') }}" autofocus>
    </div>
    @if ($errors->has('donation'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('donation') }}</p>
    </div>
    @endif
    <p> Apakah ada Makanan ? </p>
    <div class="form-group">
      <label for="fasting"><i class="fas fa-utensils"><span class="ml-2" style="font-family:ubuntu;"> Disediakan menu buka puasa atau snack?</span></i></label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_meal" id="meal-true" value="1">
        <label class="form-check-label" for="meal-true">Ya</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_meal" id="meal-false" value="0">
        <label class="form-check-label" for="meal-false">Tidak</label>
      </div>
    </div>
    @if ($errors->has('is_meal'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('is_meal') }}</p>
    </div>
    @endif
    <p> Apakah bisa Streaming ? </p>
    <div class="form-group">
    <label for="stream"><i class="fas fa-tv"><span class="ml-2" style="font-family:ubuntu;"> Apakah ada streaming online?</span></i></label>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_streaming" id="streaming-true" value="1">
        <label class="form-check-label" for="streaming-true">Ya</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_streaming" id="streaming-false" value="0">
        <label class="form-check-label" for="streaming-false">Tidak</label>
      </div>
    </div>
    @if ($errors->has('is_streaming'))
      <div class="alert alert-danger">
        <p style = 'text-align:center'>{{ $errors->first('is_streaming') }}</p>
      </div>
    @endif
    <div class="form-group">
      <label for="info"><i class="fas fa-info-circle"><span class="ml-2" style="font-family:ubuntu;"> Adakah pesan tambahan untuk desainer?</span></i></label>
      <textarea class="form-control" name="add_info" id="add_info" placeholder="Enter additional_info for your kajian or let here empty " rows="3" autofocus>{{ old('add_info') }}
      </textarea>
    </div>
    @if ($errors->has('add_info'))
      <div class="alert alert-danger">
        <p style = 'text-align:center'>{{ $errors->first('add_info') }}</p>
      </div>
    @endif
    <button class="btn btn-primary" type="Submit" >Add Design</button>
  </form>
</div>
@endsection
