<!DOCTYPE html>
<html>
<head>
    <title>Pondok Multimedia</title>
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/homepage.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
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
            @yield("article")
          </article>
        </div>
    </div>
</body>
</html>
