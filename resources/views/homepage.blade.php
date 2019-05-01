@extends('layouts.masterclient')
@section('title','Pondok Multimedia')

  {{-- Sidebar --}}
    @section('sidebar')
    <div class="grid-container">
      <div class="column-left sidebar">  
        <header>
            <div class="page-logo">
                    <img class="img-fluid" src="{{ asset('/images/pm.jpg') }}" alt="pondok multimedia">
            </div>
            <div class="intro px-3">
                <h5 class="mt-2">Design Gratis</h5>
                <h5>اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</h5>
                <h6>Website ini melayani permintaan untuk pembuatan design poster gratis untuk kegiatan kajian agama Islam.
                    Dengan tujuan mempermudah saudara-saudari yang ingin mempelajari agama Islam juga sebagai bentuk kontribusi yang dapat
                    kami lakukan terhadap umat Islam.
                </h6>
            </div>
          </header>
        </div>
        @endsection
      {{-- End Sidebar --}}

      <!-- Navbar   -->
        @section('navbar')
        <div class="column-right">
          <nav class="navbar navbar-expand-lg sticky-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://pondokmultimedia.com/">Galeri Multimedia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://pondokit.com">Tentang Pondok IT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://www.pondokprogrammer.com/">Jasa Pembuatan Website</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://kakakasuhindonesia.org/">Kakak Asuh Indonesia</a>
                </li>
              </ul>
            </div>
          </nav>
          @endsection
          {{-- End Navbar --}}

          {{-- Content --}}

          @section('content')
          {{-- Form: Check Status, Redirecting --}}
          <div class="card">

      <h5 class="card-header info-color text-center">
          <strong>Check Status</strong>
      </h5>

      <div class="card-body px-lg-5 pt-0">
          <form class="border border-light p-5" method="POST" action="{{ route('client.design.check') }}" enctype="multipart/form-data">

            @csrf

            <p class="h4 mb-4 text-center">Masukan code unik design poster Anda</p>
            
            <input type="text" name="uuid" class="form-control mb-4" placeholder="64baa976-c689-41e7-bdd1-0da5edad9712">
            <div class="form-group text-center">
              <button class="btn btn-info my-4" type="submit">Ok, Check!</button>        
            </div>
          </form>
          </div>
          </div>
          {{-- End Form: Check Status, Redirecting --}}
          {{-- Form: Submit Design --}}
        <form class="border border-light p-5" method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
          @csrf
          <p class="h4 mb-4 text-center">Ingin mengajukan pembuatan poster gratis?</p>

          <div class="d-flex justify-content-between">
              <p>Client:</p>
          </div>
              <div class="form-group">
                  <label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Pemesan?</span></i></label>
                  <input class="form-control mb-4" type="text" name="client_name" id="client_name"  value="{{ old('client_name') }}" placeholder="cth. Ahmad Sholih"  autofocus>

                  
                   @if ($errors->has('client_name'))
                      <div class="alert alert-danger">
                        <p style = 'text-align:center'>{{ $errors->first('client_name') }}</p>
                      </div>
                      @endif
              </div>

              <div class="form-group">
                  <label for="client_phone"><i class="fas fa-phone"></i><span class="ml-2" style="font-family:ubuntu;"> Nomor Telepon?</span></label>
                  <input class="form-control mb-4" type="tel" name="client_phone" id="client_phone" placeholder="cth. +62 822 1448 XXXX" value="{{ old('client_phone') }}"  autofocus>

                   @if ($errors->has('client_phone'))
                      <div class="alert alert-danger">
                        <p style = 'text-align:center'>{{ $errors->first('client_phone') }}</p>
                      </div>
                    @endif
              </div>
          <div class="d-flex justify-content-between">
              <p>Kajian:</p>
          </div>
          <div class="form-group">
              <label for="type"><i class="fas fa-book-open"><span class="ml-2" style="font-family:ubuntu;"> Jenis kajian yang akan diadakan?</span></i></label>
              <select name="type"  autofocus>
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
              <input type="text" name="audience" placeholder="cth. 3000 jamaah ikhwan dan akhwat" value="{{ old('audience') }}" >
               @if ($errors->has('audience'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('audience') }}</p>
                            </div>
                        @endif
          </div>
          <div class="form-group">
              <label for="title"><i class="fab fa-elementor"><span class="ml-2" style="font-family:ubuntu;"> Judul kajian?</span></i></label>
              <input type="text" name="title" id="title" placeholder="cth. Akhlak dan Adab" value="{{ old('title') }}" autofocus>
              @if ($errors->has('title'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('title') }}</p>
              </div>
              @endif
          </div>
          <div class="form-group">
              <label for="tag_line"><i class="fas fa-tags"><span class="ml-2" style="font-family:ubuntu;"> Tagline dari kajian?</span></i></label>
              <input type="text" name="tag_line" id="tag_line" placeholder="cth. Membangun umat dengan akhlak" value="{{ old('tag_line') }}" autofocus>
              @if ($errors->has('tagline'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('tag_line') }}</p>
              </div>
              @endif
          </div>
          <div class="form-group">
              <label for="lecturer"><i class="fas fa-chalkboard-teacher"><span class="ml-2" style="font-family:ubuntu;"> Ustadz yang mengisi kajian?</span></i></label>
              <input type="text" name="lecturer" id="lecturer" placeholder="cth. Ustadz Subhan Bawazier ,Lc." value="{{ old('lecturer') }}">
              @if ($errors->has('lecturer'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('lecturer') }}
              </p>
              </div>
              @endif
          </div>
          <div class="form-group">
              <label for="book"><i class="fas fa-book"><span class="ml-2" style="font-family:ubuntu;"> Nama kitab yang dibahas?</span></i></label>
              <input type="text" name="book" id="book" placeholder="cth. Kitab Riyadhus Sholihin" value="{{ old('book') }}" autofocus>
               @if ($errors->has('book'))
               <div class="alert alert-danger">
               <p style = 'text-align:center'>{{ $errors->first('book') }}</p>
                </div>
                @endif
          </div>
          <div class="form-group">
              <label for="place"><i class="fas fa-place-of-worship"><span class="ml-2" style="font-family:ubuntu;"> Tempat kajian?</span></i></label>
              <input type="text" name="place" id="place" placeholder="cth. Masjid Al-Husna, Desa Tirtohargo, Kecamatan Kretek, Kabupaten Bantul" value="{{ old('place') }}"  autofocus>
              @if ($errors->has('place'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('place') }}</p>
               </div>
               @endif
          </div>
          <div class="form-group">
              <label for="date"><i class="fas fa-calendar"><span class="ml-2" style="font-family:ubuntu;"> Tanggal kajian?</span></i></label>
              <input type="date" name="date" id="date" value="{{ old('date') }}"  autofocus>
              @if ($errors->has('date'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('date') }}</p>
              </div>
              @endif
          </div>

          <div class="form-group">
              <label for="time"><i class="fas fa-clock"><span class="ml-2" style="font-family:ubuntu;"> Pukul berapa kajian dilaksanakan?</span></i></label>
              <input type="time" name="time" id="time" value="{{ old('time') }}"  autofocus>
               @if ($errors->has('time'))
                <div class="alert alert-danger">
                <p style = 'text-align:center'>{{ $errors->first('time') }}</p>
                </div>
                @endif
          </div>

          <div class="form-group">
              <label for="organizer"><i class="fas fa-tools"><span class="ml-2" style="font-family:ubuntu;"> Event Organizer kajian?</span></i></label>
              <input type="text" name="organizer" id="organizer" placeholder="cth. Remaja Masjid Al-Husna" value="{{ old('organizer') }}"  autofocus>
              @if ($errors->has('organizer'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('organizer') }}</p>
              </div>
              @endif
          </div>
          
          <div class="form-group">
              <label for="contact"><i class="fas fa-phone-square"><span class="ml-2" style="font-family:ubuntu;"> Kontak kajian yang bisa dihubungi?</span></i></label>
              <input type="tel" name="contact" id="contact" placeholder="cth. Abu Abdillah:+62 822 1448 XXXX dan Ummu Hanif:0822 1448 XXXX" value="{{ old('contact') }}"  autofocus>
              @if ($errors->has('contact'))
              <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('contact') }}</p>
              </div>
              @endif
          </div>
          
          <div class="form-group">
              <label for="donation"><i class="fas fa-donate"><span class="ml-2" style="font-family:ubuntu;"> Adakah informasi tentang donasi?</span></i></label>
              <input type="text" name="donation" id="donation" placeholder="cth. BNI Syariah:1234567890 - Muhammad" value="{{ old('donation') }}" autofocus>
               @if ($errors->has('donation'))
                 <div class="alert alert-danger">
                 <p style = 'text-align:center'>{{ $errors->first('donation') }}</p>
                </div>
              @endif
          </div>
          
          <div class="form-group ">
              <label for="fasting"><i class="fas fa-utensils"><span class="ml-2" style="font-family:ubuntu;"> Apakah disediakan snack/takjil?</span></i></label>

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline5" name="is_meal" class="custom-control-input" value="1">
                <label class="custom-control-label" for="customRadioInline5">Ya, disediakan</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline6" name="is_meal" class="custom-control-input" value="0">
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
                <input type="radio" id="customRadioInline7" name="is_streaming" class="custom-control-input" value="1" >
                <label class="custom-control-label" for="customRadioInline7">Ya, Bisa</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="is_streaming" type="radio" id="customRadioInline8" name="is_streaming" class="custom-control-input" value="0" >
                <label class="custom-control-label" for="customRadioInline8">Tidak Bisa</label>
              </div>
               @if ($errors->has('is_streaming'))
                  <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('is_streaming') }}</p>
                  </div>
              @endif
          </div>
      <div class="d-flex justify-content-between">
          <p>Design Poster:</p>
      </div>
          <div class="form-group">
              <label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster yang diinginkan?</span></i></label>

              <!-- Size option -->

              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size1" name="size" class="custom-control-input" value="Square"   autofocus>
                <label class="custom-control-label" for="size1">Square</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size2" name="size" class="custom-control-input" autofocus value="1:1 Resume">
                <label class="custom-control-label" for="size2">1:1 Resume</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size3" name="size" class="custom-control-input" value="A4" autofocus>
                <label class="custom-control-label" for="size3">A4</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="size4" name="size" class="custom-control-input" value="Poster" autofocus>
                <label class="custom-control-label" for="size4">Poster</label>
              </div>
             @if ($errors->has('size'))
              <div class="alert alert-danger">
                <p style = 'text-align:center'>{{ $errors->first('size') }}</p>
              </div>
              @endif

                
          </div>

          <div class="form-group">
              <label for="base_color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar yang diinginkan? Click Dibawah</i></span></i></label>
              <input type="color" name="base_color" id="base_color" value="{{ old('base_color') }}" autofocus>
             @if ($errors->has('base_color'))
            <div class="alert alert-danger">
              <p style = 'text-align:center'>{{ $errors->first('base_color') }}</p>
            </div>
            @endif
          </div>
          <div class="form-group">
              <label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;"> Adakah gambar yang ingin ditambahkan?</span></i></label>
              <input type="file" name="image" id="image"  value="{{ old('image') }}" autofocus>

               @if ($errors->has('image'))
                <div class="alert alert-danger">
                  <p style = 'text-align:center'>{{ $errors->first('image') }}</p>
                </div>
                @endif
          </div>
          <div class="form-group">
              <label for="add_info"><i class="fas fa-info-circle"><span class="ml-2" style="font-family:ubuntu;"> Adakah pesan tambahan untuk designer?</span></i></label>
              <textarea placeholder="cth. Tambahkan catatan\nDiharap tidak membawa jajanan dari luar" name="add_info" cols="50" rows="10"></textarea>
               @if ($errors->has('add_info'))
                  <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('add_info') }}</p>
                  </div>
              @endif
          </div>
          <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">Ok, Submit!</button>  
          </div>
        {{-- </form>

          <article>
            <p class="lead text-center">Jika anda ingin mengajukan pembuatan poster gratis silahkan isi formulir di bawah ini.</p>
              <form  class="customer-form" method="POST" action="{{ route('design.store') }}" enctype="multipart/form-data">
                 @csrf

                 <input type="hidden" name="status" value="open">
                  @if ($errors->has('status'))
                      <div class="alert alert-danger">
                          <p style = 'text-align:center'>{{ $errors->first('status') }}</p>
                      </div>
                  @endif

                  <div class="form-group">
                      <label for="client_name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Pemesan?</span></i></label>
                      <input type="text" name="client_name" id="client_name"  value="{{ old('client_name') }}" placeholder="cth. Rifqi"  autofocus>

                      
                       @if ($errors->has('client_name'))
                          <div class="alert alert-danger">
                            <p style = 'text-align:center'>{{ $errors->first('client_name') }}</p>
                          </div>
                          @endif
                  </div>

                  <div class="form-group">
                      <label for="client_phone"><i class="fas fa-phone"></i><span class="ml-2" style="font-family:ubuntu;"> Nomor Telepon?</span></label>
                      <input type="tel" name="client_phone" id="client_phone" placeholder="cth. +62 822 1448 XXXX" value="{{ old('client_phone') }}"  autofocus>

                       @if ($errors->has('client_phone'))
                          <div class="alert alert-danger">
                            <p style = 'text-align:center'>{{ $errors->first('client_phone') }}</p>
                          </div>
                          @endif

                  </div>
                  <div class="form-group">
                      <label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster yang diinginkan?</span></i></label>

                      <!-- Size option -->

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="size1" name="size" class="custom-control-input" value="Square"   autofocus>
                        <label class="custom-control-label" for="size1">Square</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="size2" name="size" class="custom-control-input" autofocus value="1:1 Resume">
                        <label class="custom-control-label" for="size2">1:1 Resume</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="size3" name="size" class="custom-control-input" value="A4" autofocus>
                        <label class="custom-control-label" for="size3">A4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="size4" name="size" class="custom-control-input" value="Poster" autofocus>
                        <label class="custom-control-label" for="size4">Poster</label>
                      </div>
                     @if ($errors->has('size'))
                      <div class="alert alert-danger">
                        <p style = 'text-align:center'>{{ $errors->first('size') }}</p>
                      </div>
                      @endif

                        
                  </div>

                  <div class="form-group">
                      <label for="base_color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar yang diinginkan? Click Dibawah</i></span></i></label>
                      <input type="color" name="base_color" id="base_color" value="{{ old('base_color') }}" autofocus>
                     @if ($errors->has('base_color'))
                    <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('base_color') }}</p>
                    </div>
                    @endif
                  </div>
                  <div class="form-group">
                      <label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;"> Adakah gambar yang ingin ditambahkan?</span></i></label>
                      <input type="file" name="image" id="image"  value="{{ old('image') }}" autofocus>

                       @if ($errors->has('image'))
                        <div class="alert alert-danger">
                          <p style = 'text-align:center'>{{ $errors->first('image') }}</p>
                        </div>
                        @endif
                  </div>
                  <div class="form-group">
                      <label for="type"><i class="fas fa-book-open"><span class="ml-2" style="font-family:ubuntu;"> Jenis kajian yang akan diadakan?</span></i></label>
                      <select name="type"  autofocus>
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
                      <input type="text" name="audience" placeholder="cth. dihadiri 3000 jamaah" value="{{ old('audience') }}" >
                       @if ($errors->has('audience'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('audience') }}</p>
                                    </div>
                                @endif
                  </div>
                  <div class="form-group">
                      <label for="title"><i class="fab fa-elementor"><span class="ml-2" style="font-family:ubuntu;"> Judul kajian?</span></i></label>
                      <input type="text" name="title" id="title" placeholder="cth. Akhlak dan Adab" value="{{ old('title') }}" autofocus>
                      @if ($errors->has('title'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('title') }}</p>
                      </div>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="tag_line"><i class="fas fa-tags"><span class="ml-2" style="font-family:ubuntu;"> Tagline dari kajian?</span></i></label>
                      <input type="text" name="tag_line" id="tag_line" placeholder="cth. Membangun umat dengan akhlak" value="{{ old('tag_line') }}" autofocus>
                      @if ($errors->has('tagline'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('tag_line') }}</p>
                      </div>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="lecturer"><i class="fas fa-chalkboard-teacher"><span class="ml-2" style="font-family:ubuntu;"> Ustadz yang mengisi kajian?</span></i></label>
                      <input type="text" name="lecturer" id="lecturer" placeholder="cth. Ustadz Subhan Bawazier ,Lc." value="{{ old('lecturer') }}">
                      @if ($errors->has('lecturer'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('lecturer') }}
                      </p>
                      </div>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="book"><i class="fas fa-book"><span class="ml-2" style="font-family:ubuntu;"> Nama kitab yang dibahas?</span></i></label>
                      <input type="text" name="book" id="book" placeholder="cth. Kitab Riyadhus Sholihin" value="{{ old('book') }}" autofocus>
                       @if ($errors->has('book'))
                       <div class="alert alert-danger">
                       <p style = 'text-align:center'>{{ $errors->first('book') }}</p>
                        </div>
                        @endif
                  </div>
                  <div class="form-group">
                      <label for="place"><i class="fas fa-place-of-worship"><span class="ml-2" style="font-family:ubuntu;"> Tempat kajian?</span></i></label>
                      <input type="text" name="place" id="place" placeholder="cth. Masjid Alhusna, Desa Tirtohargo, Kecamatan Kretek, Kabupaten Bantul" value="{{ old('place') }}"  autofocus>
                      @if ($errors->has('place'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('place') }}</p>
                       </div>
                       @endif
                  </div>
                  <div class="form-group">
                      <label for="date"><i class="fas fa-calendar"><span class="ml-2" style="font-family:ubuntu;"> Tanggal kajian?</span></i></label>
                      <input type="date" name="date" id="date" value="{{ old('date') }}"  autofocus>
                      @if ($errors->has('date'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('date') }}</p>
                      </div>
                      @endif
                  </div>

                  <div class="form-group">
                      <label for="time"><i class="fas fa-clock"><span class="ml-2" style="font-family:ubuntu;"> Pukul berapa kajian dilaksanakan?</span></i></label>
                      <input type="time" name="time" id="time" value="{{ old('time') }}"  autofocus>
                       @if ($errors->has('time'))
                        <div class="alert alert-danger">
                        <p style = 'text-align:center'>{{ $errors->first('time') }}</p>
                        </div>
                        @endif
                  </div>

                  <div class="form-group">
                      <label for="organizer"><i class="fas fa-tools"><span class="ml-2" style="font-family:ubuntu;"> Event Organizer kajian?</span></i></label>
                      <input type="text" name="organizer" id="organizer" placeholder="cth. Remaja Masjid" value="{{ old('organizer') }}"  autofocus>
                      @if ($errors->has('organizer'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('organizer') }}</p>
                      </div>
                      @endif
                  </div>
                  
                  <div class="form-group">
                      <label for="contact"><i class="fas fa-phone-square"><span class="ml-2" style="font-family:ubuntu;"> Kontak kajian yang bisa dihubungi?</span></i></label>
                      <input type="tel" name="contact" id="contact" placeholder="cth. +62 822 1448 XXXX" value="{{ old('contact') }}"  autofocus>
                      @if ($errors->has('contact'))
                      <div class="alert alert-danger">
                      <p style = 'text-align:center'>{{ $errors->first('contact') }}</p>
                      </div>
                      @endif
                  </div>
                  
                  <div class="form-group">
                      <label for="donation"><i class="fas fa-donate"><span class="ml-2" style="font-family:ubuntu;"> Adakah informasi tentang donasi?</span></i></label>
                      <input type="text" name="donation" id="donation" placeholder="cth. BRI Syariah:1234567890-Muhammad Jaed" value="{{ old('donation') }}" autofocus>
                       @if ($errors->has('donation'))
                         <div class="alert alert-danger">
                         <p style = 'text-align:center'>{{ $errors->first('donation') }}</p>
                        </div>
                      @endif
                  </div>
                  
                  <div class="form-group ">
                      <label for="fasting"><i class="fas fa-utensils"><span class="ml-2" style="font-family:ubuntu;"> Disediakan menu buka puasa?</span></i></label>

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline5" name="is_meal" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="customRadioInline5">Ya, disediakan</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline6" name="is_meal" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="customRadioInline6">Tidak</label>
                      </div>
                       @if ($errors->has('is_meal'))
                          <div class="alert alert-danger">
                              <p style = 'text-align:center'>{{ $errors->first('is_meal') }}</p>
                          </div>
                      @endif
                  </div>
                  
                  <div class="form-group">
                      <label for="stream"><i class="fas fa-tv"><span class="ml-2" style="font-family:ubuntu;"> Apakah ada streaming online?</span></i></label>

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline7" name="is_streaming" class="custom-control-input" value="1" >
                        <label class="custom-control-label" for="customRadioInline7">Ya, Ada</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="is_streaming" type="radio" id="customRadioInline8" name="is_streaming" class="custom-control-input" value="0" >
                        <label class="custom-control-label" for="customRadioInline8">Tidak Ada</label>
                      </div>
                       @if ($errors->has('is_streaming'))
                                    <div class="alert alert-danger">
                                        <p style = 'text-align:center'>{{ $errors->first('is_streaming') }}</p>
                                    </div>
                                @endif
                  </div>
                  
                  <div class="form-group">
                      <label for="add_info"><i class="fas fa-info-circle"><span class="ml-2" style="font-family:ubuntu;"> Adakah pesan tambahan untuk desainer?</span></i></label>
                      <textarea placeholder="cth. Diharap tidak membawa jajanan dari luar" name="add_info" cols="50" rows="10"></textarea>
                       @if ($errors->has('add_info'))
                          <div class="alert alert-danger">
                              <p style = 'text-align:center'>{{ $errors->first('add_info') }}</p>
                          </div>
                      @endif
                  </div>
                  <div class="form-group text-center">
                      <input type="submit" name="sbmt" id="sbmt"  value="SUBMIT">
                  </div>
                </form>
              </article> --}}
            </div>
        </div>
    </div>
    @endsection