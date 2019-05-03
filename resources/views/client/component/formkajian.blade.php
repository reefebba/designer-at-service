<div class="formkajian pl-5 pr-5">
  <div class="d-flex justify-content-between">
    <h4><i class="fas fa-mosque"><span class="ml-2" style="font-family:ubuntu;">Kajian</span></i></h4>
  </div>
  <div class="form-group">
    <label for="type"><i class="fas fa-book-open"><span class="ml-2" style="font-family:ubuntu;"> Jenis kajian yang akan diadakan?</span></i></label>
    <select autocomplete="off" name="type" >
      <option value="kajian rutin">Kajian Rutin</option>
      <option value="kajian tematik">Kajian Tematik</option>
      <option value="tablig akbar">Kajian Akbar</option>
      <option value="safari dakwah">Safari Dakwah</option>
    </select>
    @if ($errors->has('type'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('type') }}</p>
    </div>
    @endif
  </div>

  <div class="form-group">
    <label for="audience"><i class="fas fa-book-reader"><span class="ml-2" style="font-family:ubuntu;"> Informasi tentang jamaah?</span></i></label>
    <input autocomplete="off" type="text" name="audience" placeholder="cth. 3000 jamaah ikhwan dan akhwat" value="{{ old('audience') }}" >
    @if ($errors->has('audience'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('audience') }}</p>
    </div>
    @endif
  </div>
  <div class="form-group">
    <label for="title"><i class="fab fa-elementor"><span class="ml-2" style="font-family:ubuntu;"> Judul kajian?</span></i></label>
    <input autocomplete="off" type="text" name="title" id="title" placeholder="cth. Akhlak dan Adab" value="{{ old('title') }}">
    @if ($errors->has('title'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('title') }}</p>
    </div>
    @endif
  </div>
  <div class="form-group">
    <label for="tag_line"><i class="fas fa-tags"><span class="ml-2" style="font-family:ubuntu;"> Tagline dari kajian?</span></i></label>
    <input autocomplete="off" type="text" name="tag_line" id="tag_line" placeholder="cth. Membangun umat dengan akhlak" value="{{ old('tag_line') }}">
    @if ($errors->has('tagline'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('tag_line') }}</p>
    </div>
    @endif
  </div>

  <div class="form-group">
    <label for="lecturer"><i class="fas fa-chalkboard-teacher"><span class="ml-2" style="font-family:ubuntu;"> Ustadz yang mengisi kajian?</span></i></label>
    <input autocomplete="off" type="text" name="lecturer" id="lecturer" placeholder="cth. Ustadz Subhan Bawazier ,Lc." value="{{ old('lecturer') }}">
    @if ($errors->has('lecturer'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('lecturer') }}
      </p>
    </div>
    @endif
  </div>
  <div class="form-group">
    <label for="book"><i class="fas fa-book"><span class="ml-2" style="font-family:ubuntu;"> Nama kitab yang dibahas?</span></i></label>
    <input autocomplete="off" type="text" name="book" id="book" placeholder="cth. Kitab Riyadhus Sholihin" value="{{ old('book') }}">
    @if ($errors->has('book'))
    <div class="alert alert-danger">
     <p style = 'text-align:center'>{{ $errors->first('book') }}</p>
   </div>
   @endif
  </div>
  <div class="form-group">
    <label for="place"><i class="fas fa-place-of-worship"><span class="ml-2" style="font-family:ubuntu;"> Tempat kajian?</span></i></label>
    <input autocomplete="off" type="text" name="place" id="place" placeholder="cth. Masjid Al-Husna, Desa Tirtohargo, Kecamatan Kretek, Kabupaten Bantul" value="{{ old('place') }}" >
    @if ($errors->has('place'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('place') }}</p>
    </div>
    @endif
  </div>
  <div class="form-group">
    <label for="date"><i class="fas fa-calendar"><span class="ml-2" style="font-family:ubuntu;"> Tanggal kajian?</span></i></label>
    <input autocomplete="off" type="date" name="date" id="date" value="{{ old('date') }}" >
    @if ($errors->has('date'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('date') }}</p>
    </div>
    @endif
  </div>

  <div class="form-group">
    <label for="time"><i class="fas fa-clock"><span class="ml-2" style="font-family:ubuntu;"> Pukul berapa kajian dilaksanakan?</span></i></label>
    <input autocomplete="off" type="time" name="time" id="time" value="{{ old('time') }}" >
    @if ($errors->has('time'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('time') }}</p>
    </div>
    @endif
  </div>

  <div class="form-group">
    <label for="organizer"><i class="fas fa-tools"><span class="ml-2" style="font-family:ubuntu;"> Event Organizer kajian?</span></i></label>
    <input autocomplete="off" type="text" name="organizer" id="organizer" placeholder="cth. Remaja Masjid Al-Husna" value="{{ old('organizer') }}" >
    @if ($errors->has('organizer'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('organizer') }}</p>
    </div>
    @endif
  </div>

  <div class="form-group">
    <label for="contact"><i class="fas fa-phone-square"><span class="ml-2" style="font-family:ubuntu;"> Kontak kajian yang bisa dihubungi?</span></i></label>
    <input autocomplete="off" type="tel" name="contact" id="contact" placeholder="cth. Abu Abdillah:+62 822 1448 XXXX dan Ummu Hanif:0822 1448 XXXX" value="{{ old('contact') }}" >
    @if ($errors->has('contact'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('contact') }}</p>
    </div>
    @endif
  </div>

  <div class="form-group">
    <label for="donation"><i class="fas fa-donate"><span class="ml-2" style="font-family:ubuntu;"> Adakah informasi tentang donasi?</span></i></label>
    <input autocomplete="off" type="text" name="donation" id="donation" placeholder="cth. BNI Syariah:1234567890 - Muhammad" value="{{ old('donation') }}">
    @if ($errors->has('donation'))
    <div class="alert alert-danger">
     <p style = 'text-align:center'>{{ $errors->first('donation') }}</p>
   </div>
   @endif
  </div>

  <div class="form-group ">
    <label for="fasting"><i class="fas fa-utensils"><span class="ml-2" style="font-family:ubuntu;"> Apakah disediakan snack/takjil?</span></i></label>

    <div class="custom-control custom-radio custom-control-inline">
      <input autocomplete="off" type="radio" id="customRadioInline5" name="is_meal" class="custom-control-input" value="1">
      <label class="custom-control-label" for="customRadioInline5">Ya, disediakan</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input autocomplete="off" type="radio" id="customRadioInline6" name="is_meal" class="custom-control-input" value="0">
      <label class="custom-control-label" for="customRadioInline6">Tidak</label>
    </div>
    @if ($errors->has('is_meal'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('is_meal') }}</p>
    </div>
    @endif
  </div>

  <div class="form-group">
    <label for="stream"><i class="fas fa-tv"><span class="ml-2" style="font-family:ubuntu;"> Apakah bisa streaming online?</span></i></label>

    <div class="custom-control custom-radio custom-control-inline">
      <input autocomplete="off" type="radio" id="customRadioInline7" name="is_streaming" class="custom-control-input" value="1" >
      <label class="custom-control-label" for="customRadioInline7">Ya, Bisa</label>
    </div>
    <div class="custom-control custom-radio custom-control-inline">
      <input autocomplete="off" name="is_streaming" type="radio" id="customRadioInline8" name="is_streaming" class="custom-control-input" value="0" >
      <label class="custom-control-label" for="customRadioInline8">Tidak Bisa</label>
    </div>
    @if ($errors->has('is_streaming'))
    <div class="alert alert-danger">
      <p style = 'text-align:center'>{{ $errors->first('is_streaming') }}</p>
    </div>
    @endif
  </div>
</div>