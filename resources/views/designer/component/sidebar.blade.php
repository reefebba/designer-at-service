  <!--  -->
  <!-- tambah sidebar -->
  <div class="sidebar">

    <!-- gambar dipindah -->
    <div class="text-center">
      <img src="{{ asset('/images/pm.jpg') }}" alt="pondok-multimedia" class="multimedia-logo img-fluid">
    </div>
    <!--  -->

    <!-- nav dipindah -->
    <nav class="mt-2">
      <ul class="nav priimary-nav flex-column">
        <li class="nav-item">
          <span class="nav-active"></span> <a class="nav-link" href="{{route('dashboard')}}">Beranda Designer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('design.index')}}?status=open">Open Design</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('design.index')}}?status=in-progress">In Progress Design</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('design.index')}}?status=finished">Finished Design</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('design.index')}}?status=failed">Failed Design</a>
        </li>
        @can('manage')
        <li class="nav-item">
          <a class="nav-link" href="{{route('manager.dashboard')}}">Beranda Manager</a>
        </li>
        @endcan
      </ul>
    </nav>
    <!-- akhir nav -->

    <!-- akhir sidebar -->
  </div>
    <!--  -->