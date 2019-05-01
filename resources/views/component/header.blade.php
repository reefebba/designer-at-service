<div class="row-top">
<header>
  <div class="word-top sticky-top">
      <!-- ubah kata ADMIN sesuai nama link halaman yang sedang dibuka -->
      <div class="my-auto py-0 d-flex align-items-center">
        <button class="btn btn-navOpen mr-2" id='nav-open' ><i class="fas fa-bars"></i></button>
        <h2 class="my-auto ml-3">@yield('nav-title')</h2>
      </div>
      <!--  -->

      <!-- @can('manage')
          <a class="admin-profile" href="/manager/profile"><i class="fas fa-user-circle fa-4x"></i></a>
      @endcan -->
      @can('designer')
          <a class="admin-profile" href="{{route('profile.show')}}"><i class="fas fa-user-circle fa-4x"></i></a>
      @endcan


      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

          <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>    
  </div>
</header>
</div>