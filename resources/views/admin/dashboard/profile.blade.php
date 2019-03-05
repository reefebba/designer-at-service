@extends("layout.dashboard_template")

@section("content")
<div class="grid-container">
  <div class="row-top">
    <header>
      <div class="word-top">
        <!-- ubah kata ADMIN sesuai nama link halaman yang sedang dibuka -->
        <div class="my-auto py-0 d-flex align-items-center">
          <button class="btn btn-navOpen mr-2" id='nav-open' ><i class="fas fa-bars"></i></button>
          <h2 class="my-auto ml-3">Profil Admin</h2>
        </div>
        <!--  -->
        <a class="admin-profile" href="admin_profile.html"><i class="fas fa-user-circle fa-4x"></i></a>
      </div>
    </header>
  </div>

  <div class="container text center my-5">
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="admin-profile-form mx-auto align-items-center shadow">
              <div class="inputBox">
                <label class="d-block">Nama</label>
                <input class="profilName" type="text" name="fullname">
              </div>
              <div class="inputBox">
                <label class="d-block">Email</label>
                <input class="profilEmail" type="email" name="email">
              </div>

              <div class="inputBox">
                <label class="d-block">Nomor Telepon</label>
                <input class="profilPhone" type="tel" name="phone_number">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
