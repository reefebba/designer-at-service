<!DOCTYPE html>
<html>
<head>
    <title>Pondok Multimedia</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <div class="grid-container">
      <div class="column-left sidebar">
        <header>
            <div class="page-logo">
                    <img class="img-fluid" src="../images/pm.jpg" alt="pondok multimedia">
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
                  <a class="nav-link" href="#">Galeri Multimedia</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tentang Pondok IT</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Jasa Pembuatan Website</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kakak Asuh Indonesia</a>
                </li>
              </ul>
            </div>
          </nav>

          <article>
            <p class="lead text-center">Jika anda ingin mengajukan pembuatan poster gratis silahkan isi formulir di bawah ini.</p>
              <form class="customer-form">
                  <div class="form-group">
                      <label for="name"><i class="fas fa-user"><span class="ml-2" style="font-family:ubuntu;"> Nama Pemesan?</span></i></label>
                      <input type="text" name="name" id="name" placeholder="cth. Ahmad">
                  </div>
                  <div class="form-group">
                      <label for="contact"><i class="fas fa-phone"></i><span class="ml-2" style="font-family:ubuntu;"> Nomor Telepon?</span></label>
                      <input type="tel" name="contact" id="contact" placeholder="cth. +62 822 1448 XXXX">
                  </div>
                  <div class="form-group">
                      <label for="size"><i class="fas fa-scroll"><span class="ml-2" style="font-family:ubuntu;"> Size / ukuran poster yang diinginkan?</span></i></label>
                      <!-- Size option -->
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Square</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">1:1 Resume</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline3">A4</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline4">Poster</label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="color"><i class="fas fa-palette"><span class="ml-2" style="font-family:ubuntu;"> Warna dasar yang diinginkan? Click Dibawah-biarkan hitam jika terserah designer-</i></span></i></label>
                      <input type="color" name="color" id="color">
                  </div>
                  <div class="form-group">
                      <label for="image"><i class="fas fa-image"><span class="ml-2" style="font-family:ubuntu;"> Adakah gambar yang ingin ditambahkan?</span></i></label>
                      <input type="file" name="image" id="image">
                  </div>
                  <div class="form-group">
                      <label for="category"><i class="fas fa-book-open"><span class="ml-2" style="font-family:ubuntu;"> Jenis kajian yang akan diadakan?</span></i></label>
                      <select>
                          <option value="daily">Kajian Rutin</option>
                          <option value="theme">Kajian Tematik</option>
                          <option value="most-big">Kajian Akbar</option>
                          <option value="safari">Safari Dakwah</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="audience"><i class="fas fa-book-reader"><span class="ml-2" style="font-family:ubuntu;"> Informasi tentang jamaah?</span></i></label>
                      <textarea placeholder="cth. dihadiri 3000 jamaah" cols="50" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="title"><i class="fab fa-elementor"><span class="ml-2" style="font-family:ubuntu;"> Judul kajian?</span></i></label>
                      <input type="text" name="title" id="title" placeholder="cth. Akhlak dan Adab">
                  </div>
                  <div class="form-group">
                      <label for="tagline"><i class="fas fa-tags"><span class="ml-2" style="font-family:ubuntu;"> Tagline dari kajian?</span></i></label>
                      <input type="text" name="tagline" id="tagline" placeholder="cth. Membangun umat dengan akhlak">
                  </div>
                  <div class="form-group">
                      <label for="teacher"><i class="fas fa-chalkboard-teacher"><span class="ml-2" style="font-family:ubuntu;"> Ustadz yang mengisi kajian?</span></i></label>
                      <input type="text" name="teacher" id="teacher" placeholder="cth. Ustadz Subhan Bawazier ,Lc.">
                  </div>
                  <div class="form-group">
                      <label for="book"><i class="fas fa-book"><span class="ml-2" style="font-family:ubuntu;"> Nama kitab yang dibahas?</span></i></label>
                      <input type="text" name="book" id="book" placeholder="cth. Kitab Riyadhus Sholihin">
                  </div>
                  <div class="form-group">
                      <label for="place"><i class="fas fa-place-of-worship"><span class="ml-2" style="font-family:ubuntu;"> Tempat kajian?</span></i></label>
                      <input type="text" name="place" id="place" placeholder="cth. Masjid Alhusna, Desa Tirtohargo, Kecamatan Kretek, Kabupaten Bantul">
                  </div>
                  <div class="form-group">
                      <label for="date"><i class="fas fa-calendar"><span class="ml-2" style="font-family:ubuntu;"> Tanggal kajian?</span></i></label>
                      <input type="date" name="date" id="date">
                  </div>
                  <div class="form-group">
                      <label for="time"><i class="fas fa-clock"><span class="ml-2" style="font-family:ubuntu;"> Pukul berapa kajian dilaksanakan?</span></i></label>
                      <input type="time" name="time" id="time">
                  </div>
                  <div class="form-group">
                      <label for="eo"><i class="fas fa-tools"><span class="ml-2" style="font-family:ubuntu;"> Event Organizer kajian?</span></i></label>
                      <input type="text" name="eo" id="eo" placeholder="cth. Remaja Masjid">
                  </div>
                  <div class="form-group">
                      <label for="telephone"><i class="fas fa-phone-square"><span class="ml-2" style="font-family:ubuntu;"> Kontak kajian yang bisa dihubungi?</span></i></label>
                      <input type="tel" name="telephone" id="telephone" placeholder="cth. Abu ahmad: +62 822 1448 XXXX">
                  </div>
                  <div class="form-group">
                      <label for="donate"><i class="fas fa-donate"><span class="ml-2" style="font-family:ubuntu;"> Adakah informasi tentang donasi?</span></i></label>
                      <input type="text" name="donate" id="donate" placeholder="cth. BRI Syariah:1234567890-Muhammad Jaed">
                  </div>
                  <div class="form-group ">
                      <label for="fasting"><i class="fas fa-utensils"><span class="ml-2" style="font-family:ubuntu;"> Disediakan menu buka puasa atau snack?</span></i></label>

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline4" name="customRadioInline4" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline4">Ya, disediakan</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline5" name="customRadioInline5" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline5">Tidak</label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="stream"><i class="fas fa-tv"><span class="ml-2" style="font-family:ubuntu;"> Apakah ada streaming online?</span></i></label>

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline6" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Ya, Ada</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline7" name="customRadioInline1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Tidak Ada</label>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="info"><i class="fas fa-info-circle"><span class="ml-2" style="font-family:ubuntu;"> Adakah pesan tambahan untuk desainer?</span></i></label>
                      <textarea placeholder="cth. Diharap tidak membawa jajanan dari luar" cols="50" rows="10"></textarea>
                  </div>
                  <div class="form-group text-center">
                      <input type="submit" name="sbmt" id="sbmt" value="SUBMIT">
                  </div>
                </form>
              </article>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
