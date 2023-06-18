<!-- Main Header -->
<header class="main-header header-style-one">
  <!-- Header Upper -->
  <div class="header-upper">
      <div class="auto-container">
          <div class="inner-container">
              <!--Logo-->
              <div class="logo-box">
                  <div class="logo"><a href="index.html"><img src="{{URL::asset('assets/images/logo-light.png')}}" alt=""></a></div>
                </div>
              <div class="right-column">
                  <!--Nav Box-->
                  <div class="nav-outer">
                      <!--Mobile Navigation Toggler-->
                      <div class="mobile-nav-toggler"><img src="{{URL::asset('assets/images/icons/icon-bar.png')}}" alt=""></div>

                      <!-- Main Menu -->
                      <nav class="main-menu navbar-expand-md navbar-light">
                          <div class="collapse navbar-collapse show clearfix">
                              <ul class="navigation">
                              <li><a href={{ url('/') }}>Beranda</a></li>
                              <li class="dropdown"><a href="#">Tentang Kami</a>
                                <ul>
                                  <li><a href={{ url('about-us') }}>Tentang Kami</a></li>
                                  <li><a href={{ url('/our-instructors')}}>Instruktur Kami</a></li>
                                </ul>
                              </li>
                              <li><a href={{ url('our-services') }}>Layanan Kursus</a></li>
                              </li>
                              <li><a href="{{ url('/contact-us') }}">Kontak Kami</a></li>
                          </ul>
                          </div>
                      </nav>
                  </div>
                  <div class="navbar-right">
                      <button type="button" class="theme-btn search-toggler"><i class="flaticon-magnifying-glass"></i></button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--End Header Upper-->

  <!-- Sticky Header  -->
  <div class="sticky-header">
      <div class="header-upper">
          <div class="auto-container">
              <div class="inner-container">
                  <!--Logo-->
                  <div class="logo-box">
                      <div class="logo"><a href="index.html"><img src="{{URL::asset('assets/images/logo-light.png')}}" alt=""></a></div>
                  </div>
                  <div class="right-column">
                      <!--Nav Box-->
                      <div class="nav-outer">
                          <!--Mobile Navigation Toggler-->
                          <div class="mobile-nav-toggler"><img src="{{URL::asset('assets/images/icon/icon-bar.png')}}" alt=""></div>

                          <!-- Main Menu -->
                          <nav class="main-menu navbar-expand-md navbar-light">
                              <div class="collapse navbar-collapse show clearfix">

                              </div>
                          </nav>
                      </div>
                      <div class="navbar-right">
                          <button type="button" class="theme-btn search-toggler"><i class="flaticon-magnifying-glass"></i></button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div><!-- End Sticky Menu -->

  <!-- Mobile Menu  -->
  <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <div class="close-btn"><i class="icon flaticon-cancel"></i></div>

      <nav class="menu-box">
          <div class="nav-logo"><a href="index.html"><img src="{{URL::asset('assets/images/logo-light.png')}}" alt="" title=""></a></div>
          <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
  <!--Social Links-->
  <div class="social-links">
    <ul class="clearfix">
      <li><a href="#"><span class="fab fa-twitter"></span></a></li>
      <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
      <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
      <li><a href="#"><span class="fab fa-instagram"></span></a></li>
      <li><a href="#"><span class="fab fa-youtube"></span></a></li>
    </ul>
          </div>
      </nav>
  </div><!-- End Mobile Menu -->

  <div class="nav-overlay">
      <div class="cursor"></div>
      <div class="cursor-follower"></div>
  </div>
</header>
<!-- End Main Header -->