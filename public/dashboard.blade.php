@extends('layouts.master')

@section('links')

    <link rel="stylesheet" type="text/css" href="../css_files/admin_dashboard.css">
    <link rel="stylesheet" type="text/css" href="../css_files/responsive_navbar.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/admin/css_files/admin_dashboard.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/css_files/admin_dashboard.css') }}"> -->

@endsection

@section('contents')
  <!-- tambah wrapper -->
  <div class="wrapper">
  <!--  -->
    <!-- tambah sidebar -->
    <div class="sidebar">

      <!-- gambar dipindah -->
      <div class="text-center">
        <img src="../../images/pm.jpg" alt="pondok-multimedia" class="multimedia-logo img-fluid">
      </div>
      <!--  -->

      <!-- nav dipindah -->
      <nav class="mt-2">
        <ul class="nav priimary-nav flex-column">
          <li class="nav-item">
            <span class="nav-active"></span> <a class="nav-link" href="admin_dashboard.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="designer_list.html">Designer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order_list.html">Antrian Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inprogress_list.html">Order Dikerjakan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="finish_list.html">Order Selesai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_designer.html">Tambah Desainer</a>
          </li>
        </ul>
      </nav>
      <!-- akhir nav -->

    <!-- akhir sidebar -->
    </div>
    <!--  -->
    <div class="grid-container">
        <div class="row-top">
            <header>
                <div class="word-top sticky-top">
                    <!-- ubah kata ADMIN sesuai nama link halaman yang sedang dibuka -->
                    <div class="my-auto py-0 d-flex align-items-center">
                      <button class="btn btn-navOpen mr-2" id='nav-open' ><i class="fas fa-bars"></i></button>
                      <h2 class="my-auto ml-3">Beranda</h2>
                    </div>
                    <!--  -->
                    <a class="admin-profile" href="admin_profile.html"><i class="fas fa-user-circle fa-4x"></i></a>
                </div>

            </header>
        </div>
        <div class="row-middle page-body">
            <div class="page-content">
                <article>
                    <div class="order-box">
                        <div class="order">
                            <h4>Open</h4>
                            <h2>100</h2>
                        </div>
                        <div class="order">
                            <h4>In progress</h4>
                            <h2>100</h2>
                        </div>
                        <div class="order">
                            <h4>Finished</h4>
                            <h2>100</h2>
                        </div>
                        <div class="order">
                            <h4>Failed</h4>
                            <h2>100</h2>
                        </div>
                        <div class="order total">
                            <h4>Total</h4>
                            <h2>400</h2>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <hr>
        <div class="row-middle page-body">
            <div class="page-content">
                <article>
                    <div class="order-box">
                        <div class="order desaigner">
                            <h4>Desaigner Active</h4>
                            <h2>100</h2>
                        </div>
                        <div class="order desaigner">
                            <h4>Desaigner banned</h4>
                            <h2>100</h2>
                        </div>
                        <div class="order total">
                            <h4>Total</h4>
                            <h2>200</h2>
                        </div>
                    </div>
                </article>
            </div>
        </div>

    </div>
  <!-- akhir wrapper -->
  </div>
  <!--  -->
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('/js/js_files/nav-responsive.js') }}"></script>
@endsection