@extends('layouts.app')
@section('web_title', "Tentang Kami")
@section('description', "Ace Drive adalah lembaga kursus mobil yang terpercaya dan berpengalaman. Kami menyediakan pelatihan mengemudi yang komprehensif dan profesional untuk membantu Anda mengembangkan keterampilan mengemudi yang unggul. Dengan tim instruktur yang berkualitas dan pendekatan yang interaktif, kami bertekad membantu Anda meraih kepercayaan diri dan kemahiran dalam menguasai kendaraan. Bergabunglah dengan Ace Drive dan temukan pengalaman belajar mengemudi yang menginspirasi dan aman.")

@section('content')
  <!-- Page Title -->
  <section class="page-title" style="background-image: url(assets/images/main-slider/about-us.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="content-wrapper">
                <ul class="bread-crumb">
                    <li><a href={{ url('/') }}>Beranda</a></li>
                    <li>Tentang Kami</li>
                </ul>
                <div class="title">
                    <h1>Tentang Kami</h1>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- experience section -->
  <section class="experience-section style-two">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image clearfix"><img src="assets/images/resource/image-79.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sec-title">
                    <h4>Perkenalan</h4>
                    <h2>Jadwalkan Pelajaran Mengemudi Anda
                      <br>Bersama Kami!</h2>
                    </div>
                <div class="text-two">Bergabunglah dengan kami dan dapatkan pengalaman belajar mengemudi yang inspiratif dan aman. Dapatkan instruktur profesional, mobil kursus yang aman, dan materi praktis yang komprehensif. Segera daftarkan diri Anda untuk memulai perjalanan menuju kemahiran mengemudi yang unggul! Diskon khusus untuk pendaftaran awal! Jangan lewatkan kesempatan ini, hubungi kami sekarang dan jadwalkan pelajaran mengemudi Anda bersama Ace Drive!
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

  <!-- cta two -->
  <section class="cta-two" style="background-image: url(assets/images/background/bg-1.jpg);">
    <div class="auto-container">
        <h4>Ramah & Sabar <br> Instruktur Handal</h4>
        <div class="link-btn"><a href="#" class="theme-btn btn-style-one">discover more</a></div>
    </div>
  </section>

  <!-- Our Team Section -->
  <section class="our-team-section style-two">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h4>Kepengurusan</h4>
            <h2>Siap Melayani Anda</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="image img_hover_3"><img src="assets/images/persons/person-2.jpg" alt=""></div>
                    <div class="lower-content">
                        <div class="name">Ahmad Fathoni</div>
                        <div class="designation">Kepala Sekolah</div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="image img_hover_3"><img src="assets/images/persons/person-1.jpg" alt=""></div>
                    <div class="lower-content">
                        <div class="name">Teuku Firmansyah</div>
                        <div class="designation">Ketua Kurikulum</div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="image img_hover_3"><img src="assets/images/persons/person-2.jpg" alt=""></div>
                    <div class="lower-content">
                        <div class="name">Subagyo</div>
                        <div class="designation">Koordinator Instruktur</div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 team-block-one">
                <div class="inner-box">
                    <div class="image img_hover_3"><img src="assets/images/persons/person-1.jpg" alt=""></div>
                    <div class="lower-content">
                        <div class="name">Fitri Lestari</div>
                        <div class="designation">Koordinator Admin</div>
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!-- Why Choose Section -->
  <section class="why-choose-section pt-0">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sec-title">
                    <h4>Keuntungan</h4>
                    <h2>Kenapa memilih Ace Drive?</h2>
                </div>
                <div class="text mb-40">Pilihlah sekolah mengemudi kami karena kami memiliki instruktur berpengalaman yang ramah dan terlatih dan kurikulum yang terstruktur dan fleksibel sesuai dengan kebutuhan Anda. Kami berkomitmen untuk memberikan pengalaman belajar mengemudi yang optimal dan membantu Anda mencapai keahlian mengemudi yang handal. Bergabunglah dengan kami sekarang dan rasakan perbedaan yang kami tawarkan!</div>
                <ul class="list">
                    <li><i class="fas fa-arrow-circle-right"></i> Instruktur Berpengalaman</li>
                    <li><i class="fas fa-arrow-circle-right"></i> Fasilitas Modern</li>
                    <li><i class="fas fa-arrow-circle-right"></i> Biaya Terjangkau </li>
                    <li><i class="fas fa-arrow-circle-right"></i> Kurikulum Fleksibel  </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="image-block">
                    <div class="shape"><img src="assets/images/shape/shape-6.png" alt=""></div>
                    <div class="image">
                        <div class="img_hover_3">
                            <img src="assets/images/resource/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <!--Testimonials Section-->
  <section class="testimonials-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h4>Feedback Siswa</h4>
            <h2>Apa yang Mereka Katakan
            </h2>
        </div>
        <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "2" } , "992":{ "items" : "3" }, "1200":{ "items" : "3" }}}'>
          <div class="testimonials-block-one">
            <div class="inner-box">
                <div class="text">Saya sangat senang dengan pengalaman belajar mengemudi di Ace Drive. Instruktur mereka sangat profesional dan sabar dalam membimbing saya. Berkat kursus ini, saya berhasil mendapatkan lisensi mengemudi. Terima kasih Ace Drive!</div>
                <div class="author-info">
                    <div class="image"><img src="assets/images/resource/image-14.jpg" alt=""></div>
                    <div class="name">Susi Susanti</div>
                    <div class="designation">Siswa</div>
                </div>
            </div>
          </div>
          <div class="testimonials-block-one">
              <div class="inner-box">
                  <div class="text">Pengalaman mengemudi saya di Ace Drive sangat mengesankan. Instruktur mereka ramah dan memberikan banyak kesempatan untuk berlatih di berbagai situasi lalu lintas yang berbeda, sehingga saya merasa lebih siap dan percaya diri.</div>
                  <div class="author-info">
                      <div class="image"><img src="assets/images/resource/image-15.jpg" alt=""></div>
                      <div class="name">Rina Nose</div>
                      <div class="designation">Siswa</div>
                  </div>
              </div>
          </div>
          <div class="testimonials-block-one">
              <div class="inner-box">
                  <div class="text">Saya sangat merekomendasikan Ace Drive untuk kursus mengemudi. Instruktur mereka memiliki pengetahuan yang luas dan sangat berpengalaman. Jadwal kursus yang fleksibel membuatnya mudah bagi saya untuk mengatur waktu belajar.</div>
                  <div class="author-info">
                      <div class="image"><img src="assets/images/resource/image-16.jpg" alt=""></div>
                      <div class="name">Andi Riyanto</div>
                      <div class="designation">Siswa</div>
                  </div>
              </div>
          </div>
        </div>
    </div>
  </section>

  <!-- Cta three -->
  <div class="cta-three">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h4>90% Siswa Kami Lulus Tes Mengemudi
                 <br/> pada Percobaan Pertama Mereka</h4>
            </div>
            <div class="col-lg-4">
                <div class="link-btn"><a href="#" class="btn-style-two">Telusuri Lagi</a></div>
            </div>
        </div>
    </div>
  </div>
@endsection