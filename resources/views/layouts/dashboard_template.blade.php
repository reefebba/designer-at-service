
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
      crossorigin="anonymous">
  <script src="{{ asset('js/app.js') }}" ></script>

  <title>Profil Admin</title>
</head>

<body>
  <!-- tambah wrapper -->
  <div class="wrapper">
  <!--  -->
    <!-- tambah sidebar -->
    <div class="sidebar">

      <!-- gambar dipindah -->
      <div class="text-center">
        <img src="{{ asset('images/pm.jpg') }}" alt="pondok-multimedia" class="multimedia-logo img-fluid">
      </div>
      <!--  -->

      <!-- nav dipindah Untuk Admin-->
      @auth("admin")
      <nav class="mt-2 ">
        <ul class="nav priimary-nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Designer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.design.open')}}">Antrian Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.design.inprogress')}}">Order Dikerjakan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.design.finished')}}">Order Selesai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_designer.html">Tambah Desainer</a>
          </li>
        </ul>
      </nav>
      @endauth
      <!-- akhir nav -->

      <!-- nav dipindah -->
      @auth("web")
      <nav class="mt-2 ">
        <ul class="nav priimary-nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('design.index')}}">Antrian Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Order Dikerjakan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.show')}}#finishedorder">Order Selesai</a>
          </li>
        </ul>
      </nav>
      @endauth
      <!-- akhir nav -->

    <!-- akhir sidebar -->
    </div>
    <!--  -->
    <div class="grid-container">
      <div class="row-top">
        <header>
          <div class="word-top">
            <!-- ubah kata ADMIN sesuai nama link halaman yang sedang dibuka -->
            <div class="my-auto py-0 d-flex align-items-center">
              <button class="btn btn-navOpen mr-2" id='nav-open' >
                <i class="fas fa-bars"></i>
              </button>
              <h2 class="my-auto ml-3">
                @yield("title")
              </h2>
            </div>
            <!--  -->
            <a class="admin-profile" href="admin_profile.html">
              <i class="fas fa-user-circle fa-4x"></i>
            </a>
          </div>
        </header>
      </div>

      @section('content')
      @show

    </div>

    <!--  -->
    <!-- Script Section -->
    <script>
      $('#nav-open').on('click', function() {
        $('.sidebar').toggle()
      })
    </script>
    @section('script')
    @show
</body>
</html>
