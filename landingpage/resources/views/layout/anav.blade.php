<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">

    <div class="logo">
      <h1>
        {{ Auth::user()-> name }}
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="{{asset('Vesperr')}}assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">

      <ul>
        <li><a class="nav-link scrollto " href="/dashboard">Dashboard</a></li>
        <li class="dropdown"><a href="#"><span>Product</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="">Product Terupload</a></li>
            <li><a href="/tambah">Tambahkan Product</a></li>

          </ul>
        </li>
        <li><a class="nav-link" href="/pesan">Pesan</a></li>
        <li><a class="nav-link" href="/orderan">Orderan</a></li>
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
