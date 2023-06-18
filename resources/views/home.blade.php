@extends('layouts.app')
@section('web_title', "Petualangan Mengemudi Dimulai di Ace Drive!")
@section('description', "Ace Drive adalah lembaga kursus mobil yang terpercaya dan berpengalaman. Kami menyediakan pelatihan mengemudi yang komprehensif dan profesional untuk membantu Anda mengembangkan keterampilan mengemudi yang unggul. Dengan tim instruktur yang berkualitas dan pendekatan yang interaktif, kami bertekad membantu Anda meraih kepercayaan diri dan kemahiran dalam menguasai kendaraan. Bergabunglah dengan Ace Drive dan temukan pengalaman belajar mengemudi yang menginspirasi dan aman.")

@section('content')
  <!--Search Popup-->
  <div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><i class="flaticon-cancel"></i></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
  </div>

  <!-- Bnner Section -->
  <section class="banner-section">
    <div class="swiper-container banner-slider">
        <div class="swiper-wrapper">
            <!-- Slide Item -->
            <div class="swiper-slide" style="background-image: url(assets/images/main-slider/hero-1.jpg);">
                <div class="content-outer">
                    <div class="content-box justify-content-center">
                        <div class="inner text-center">
                            <h4>Solusi Pelajaran Mengemudi Anda</h4>
                            <h1>Petualangan baru <br>di Ace Drive!</h1>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span>telusuri lagi</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide Item -->
            <div class="swiper-slide" style="background-image: url(assets/images/main-slider/hero-2.jpg);">
                <div class="content-outer">
                    <div class="content-box justify-content-center">
                        <div class="inner">
                            <h4>Solusi Pelajaran Mengemudi Anda</h4>
                            <h1>Bersiaplah menjadi <br> pengemudi Handal!</h1>
                            <div class="link-box">
                                <a href="#" class="theme-btn btn-style-one"><span>telusuri lagi</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-slider-nav">
        <div class="banner-slider-control banner-slider-button-prev"><span><i class="flaticon-right-arrow-4"></i></span></div>
        <div class="banner-slider-control banner-slider-button-next"><span><i class="flaticon-right-arrow-4"></i></span> </div>
    </div>
  </section>
  <!-- End Bnner Section -->

  <!-- About section -->
  <section class="about-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6 pe-lg-5">
                <div class="sec-title">
                    <h4>Our Introduction</h4>
                    <h2>Jadwalkan Pelajaran Mengemudi Anda
                      <br>Bersama Kami!</h2>
                </div>
                <h3>Petualangan Mengemudi Dimulai di Ace Drive!</h3>
                <div class="text">
                  Bergabunglah dengan kami dan dapatkan pengalaman belajar mengemudi yang inspiratif dan aman. Dapatkan instruktur profesional, mobil kursus yang aman, dan materi praktis yang komprehensif. Segera daftarkan diri Anda untuk memulai perjalanan menuju kemahiran mengemudi yang unggul! Diskon khusus untuk pendaftaran awal! Jangan lewatkan kesempatan ini, hubungi kami sekarang dan jadwalkan pelajaran mengemudi Anda bersama Ace Drive!
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon_box wow fadeInUp" data-wow-duration="1500ms">
                            <i class="flaticon-hands"></i>
                            <h4>Praktek</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_box wow fadeInDown" data-wow-duration="1500ms">
                            <i class="flaticon-instructor"></i>
                            <h4>Teori</h4>
                        </div>
                    </div>
                </div>
                <div class="phone-number">Punya pertanyaan?   <a href="tel:+628112233880">0811 2233 880</a></div>
            </div>
            <div class="col-lg-6">
                <div class="image">
                    <div class="img_hover_3 wow fadeInRight" data-wow-duration="1500ms">
                        <img src="assets/images/resource/course-1.jpg" alt="">
                    </div>
                    <div class="image_box" data-parallax='{"y": 40}'>
                        <img src="assets/images/resource/course-2.jpg" alt="">
                        <h4>Lebih dari <br>
                            5.000 orang <br>
                            mendaftar</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- funfacts section -->
  <section class="funfacts-section">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-3 col-md-6 funfact-block-one">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="icon"><i class="flaticon-car-insurance"></i></div>
                    <div class="content">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="2230">0</span>
                        </div>
                        <div class="text">SIM Diterbitkan</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 funfact-block-one">
                <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                    <div class="icon"><i class="flaticon-driver"></i></div>
                    <div class="content">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="2318">0</span>
                        </div>
                        <div class="text">Siswa Aktif</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 funfact-block-one">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="icon"><i class="flaticon-rating"></i></div>
                    <div class="content">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="2000" data-stop="1809">0</span>
                        </div>
                        <div class="text">Review</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 funfact-block-one">
                <div class="inner-box wow fadeInDown" data-wow-duration="1500ms">
                    <div class="icon"><i class="flaticon-driving-school"></i></div>
                    <div class="content">
                        <div class="count-outer count-box">
                            <span class="count-text" data-speed="3000" data-stop="15000">0</span>
                        </div>
                        <div class="text">Jam Pelatihan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Courses section -->
  <section class="courses-section pt-0">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h4>Pengemudi Professional Ace Drive
            </h4>
            <h2>Instruktur Kami
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-4 course-block-one">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="image"><img src="assets/images/resource/image-3.jpg" alt=""></div>
                    <div class="lower-content">
                        <div class="instructor-thumb"><img src="assets/images/persons/person-2.jpg" alt=""></div>
                        <div class="designation">Instruktur</div>
                        <div class="name">Budi Prasetyo</div>
                        <h3><a href="#"> Mobil Matic</a></h3>
                        <div class="text">Siap membantu siswa meraih keahlian mengemudi yang optimal dengan mobil manual.
                        </div>
                        <div class="link-btn"><a href="#" class="btn-style-two">Jadwal: <span>07.00 - 10.00</span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 course-block-one">
                <div class="inner-box wow fadeInDwon" data-wow-duration="1500ms">
                    <div class="image"><img src="assets/images/resource/image-4.jpg" alt=""></div>
                    <div class="lower-content">
                        <div class="instructor-thumb"><img src="assets/images/persons/person-1.jpg" alt=""></div>
                        <div class="designation">Instruktur</div>
                        <div class="name">Anton Wijaya</div>
                        <h3><a href="#"> Mobil Manual</a></h3>
                        <div class="text">Membantu mengembangkan keahlian mengemudi dengan percaya diri di jalan tol yang sibuk.
                        </div>
                        <div class="link-btn"><a href="#" class="btn-style-two">Jadwal: <span>11.00 - 14.00</span></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 course-block-one">
                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="image"><img src="assets/images/resource/image-5.jpg" alt=""></div>
                    <div class="lower-content">
                        <div class="instructor-thumb"><img src="assets/images/persons/person-2.jpg" alt=""></div>
                        <div class="designation">Instruktur</div>
                        <div class="name">Rizky Rahman</div>
                        <h3><a href="#">Mobil Matic</a> </h3>
                        <div class="text">Memberikan pengajaran yang efektif dan komunikasi yang lancar kepada siswa dari berbagai negara
                        </div>
                        <div class="link-btn"><a href="#" class="btn-style-two">Jadwal: <span>15.00 - 18.00</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Our Service -->
  <section class="service-section" style="background-image: url(assets/images/background/bg-1.jpg);">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sec-title light">
                    <h4>Siap Belajar Mengemudi?</h4>
                    <h2>Kami Siap Membantu Anda

                      <br> untuk Mendapatkan SIM<br>dalam Percobaan Pertama!</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="video-box">
                    <div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link play-now ripple" data-fancybox="gallery" data-caption=""><i class="flaticon-play-button"></i></a></div>
                    <h4>Testimoni Video</h4>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="row">
            <div class="col-lg-4 service-block-1">
                <div class="icon_box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="icon"><i class="flaticon-driving-school-1"></i></div>
                    <h4>Instruktur <br/>
                      Profesional
                      </h4>
                </div>
                <div class="text">
                    Ace Drive memiliki tim instruktur yang terlatih dan berpengalaman dalam mengajar mengemudi.
                </div>
            </div>
            <div class="col-lg-4 service-block-1">
                <div class="icon_box wow fadeInDown" data-wow-duration="1500ms">
                    <div class="icon"><i class="flaticon-car"></i></div>
                    <h4>Mobil Kursus <br/>
                      yang Aman
                      </h4>
                </div>
                <div class="text">
                  Kami menyediakan mobil kursus yang aman dan terawat dengan baik. Setiap mobil dilengkapi dengan fitur keselamatan yang memadai.
                </div>
            </div>

            <div class="col-lg-4 service-block-1">
                <div class="icon_box wow fadeInUp" data-wow-duration="1500ms">
                    <div class="icon"><i class="flaticon-driver-1"></i></div>
                    <h4>Pendekatan <br/>
                      Interaktif
                      </h4>
                </div>
                <div class="text">
                  Kami tidak hanya fokus pada teori, tetapi juga memberikan pelajaran praktik yang melibatkan murid secara aktif.
                </div>
            </div>
        </div>
    </div>
  </section>


  <!-- experience section -->
  <section class="experience-section">
    <div class="shape-one"><img src="assets/images/shape/shape-1.png" alt=""></div>
    <div class="cta wow fadeInUp" data-wow-duration="1500ms">
        <div class="auto-container">
            <div class="content" style="background-image: url(assets/images/background/bg-2.jpg)">
                <h2>Daftar Sekarang dan Dapatkan Potongan Harga!
                </h2>
                <div class="text">Promo khusus bagi anggota baru

                </div>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image clearfix"><img src="assets/images/resource/course-3.jpg" alt="">
                    <div class="text" data-parallax='{"y": 40}'>We’re <br>Experience <br>Drivers </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title">
                    <h4>Get to Know More</h4>
                    <h2>Ace Drive memiliki pengalaman mengemudi
                      <br> yang luar biasa.</h2>
                </div>
                <div class="text-two">Kami telah sukses mengajar dan membimbing ribuan siswa untuk meraih keahlian mengemudi yang unggul. Dengan pengalaman yang luas ini, kami siap memberikan Anda pelatihan yang terbaik untuk mengembangkan keterampilan mengemudi Anda dengan percaya diri dan aman.
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="text-box">
                            <h4><i class="fas fa-arrow-circle-right"></i> Biaya Terjangkau</h4>
                            <div class="text">Kami menyadari pentingnya pembelajaran mengemudi yang terjangkau.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-box">
                            <h4><i class="fas fa-arrow-circle-right"></i> Tepat Waktu
                            </h4>
                            <div class="text">Kami berkomitmen untuk menjaga ketepatan waktu dalam setiap pelajaran.</div>
                        </div>
                    </div>
                </div>
                <div class="progress-levels">

                    <!--Skill Box-->
                    <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <h5>Instruktur Berpengalaman</h5>
                        <div class="inner">
                            <div class="bar">
                                <div class="bar-innner"><div class="bar-fill" data-percent="95"><div class="percent"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <!--Skill Box-->
                    <div class="progress-box wow fadeIn" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <h5>Mobil Baru</h5>
                        <div class="inner">
                            <div class="bar">
                                <div class="bar-innner"><div class="bar-fill" data-percent="85"><div class="percent"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>


  <!-- Appointment Section -->
  <section class="appointment-section" style="background-image: url(assets/images/background/bg-4.jpg)">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title light">
                    <h4>Formulir Pendaftaran</h4>
                    <h2>Isi Formulir & <br> Mulai Belajar</h2>
                </div>
                <div class="text">Tunggu apa lagi? Bersiaplah untuk menguasai jalan raya dan menjadi pengemudi handal yang diakui. Bergabunglah dengan sekolah mengemudi kami sekarang dan mulailah perjalanan Anda menuju kebebasan di jalan raya!
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="icon_box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="icon"><i class="flaticon-parking"></i></div>
                            <h4>Instruktur <br> Handal</h4>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="icon_box wow fadeInUp" data-wow-duration="1500ms">
                            <div class="icon"><i class="flaticon-register"></i></div>
                            <h4>Dipercaya sejak <br> 2004</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <!--Contact Form-->
                <div class="contact-form">
                    <form method="post" action="inc/sendmail.php" id="contact-form" class="wow fadeInUp" data-wow-duration="1500ms">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="text" name="form_name" value="" placeholder="Nama" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="form_email" value="" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="form_subject" value="" placeholder="Judul" required>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="form_message" placeholder="Pesan"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Daftar</span></button>
                            </div>
                        </div>
                    </form>
                    <div class="video-box-two wow fadeInLeft" data-wow-duration="1500ms"><div class="video-btn"><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link play-now ripple" data-fancybox="gallery" data-caption=""><i class="fas fa-play"></i></a></div></div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <div class="divider"></div>
@endsection