@extends('layouts.app')
@section('web_title', "Kontak Kami")
@section('description', "Ace Drive adalah lembaga kursus mobil yang terpercaya dan berpengalaman. Kami menyediakan pelatihan mengemudi yang komprehensif dan profesional untuk membantu Anda mengembangkan keterampilan mengemudi yang unggul. Dengan tim instruktur yang berkualitas dan pendekatan yang interaktif, kami bertekad membantu Anda meraih kepercayaan diri dan kemahiran dalam menguasai kendaraan. Bergabunglah dengan Ace Drive dan temukan pengalaman belajar mengemudi yang menginspirasi dan aman.")

@section('content')
<!-- Page Title -->
    <section class="page-title" style="background-image: url(assets/images/background/bg-4.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <ul class="bread-crumb">
                        <li><a href={{ url('/')}}>Beranda</a></li>
                        <li>Kontak Kami</li>
                    </ul>
                    <div class="title">
                        <h1>Kontak Kami</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.296466022467!2d106.80097517514055!3d-6.224585593763512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f14e5b3a1a2d%3A0x2fc91ffa8074de84!2sJl.%20Jenderal%20Sudirman%2C%20RT.1%2FRW.3%2C%20Senayan%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010270!5e0!3m2!1sid!2sid!4v1686514449068!5m2!1sid!2sid" width="600" height="500" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>

    <!-- Contact info Section -->
    <section class="contact-info-section pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 icon_box">
                    <div class="inner-box">
                        <div class="icon"><i class="flaticon-map"></i></div>
                        <div class="text">Kunjungi Kami Di</div>
                        <h4>Jl. Jenderal Sudirman,<br> Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</h4>
                    </div>
                </div>
                <div class="col-lg-4 icon_box">
                    <div class="inner-box">
                        <div class="icon"><i class="flaticon-email-1"></i></div>
                        <div class="text">Kirim Email</div>
                        <h4><a href="mailto:admin@acedrive.co.id">admin@acedrive.co.id</a></h4>
                    </div>
                </div>
                <div class="col-lg-4 icon_box">
                    <div class="inner-box">
                        <div class="icon"><i class="flaticon-phone-ringing"></i></div>
                        <div class="text">Hubungi 24/7</div>
                        <h4><a href="tel:+628112233880">0811 2233 880</a></h4>
                    </div>
                </div>
            </div>
            <div class="bottom-content text-center">
                <h3>Waktu Kursus: <span>Senin - Minggu 09.00 sampai 18.00</span></h3>
                <ul class="social-links">
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </section>


    <!-- Contact Form section -->
    <section class="contact-form-section">
       <div class="auto-container">
            <div class="sec-title text-center">
                <h4 class="sub-title">Sampaikan Pesan Anda</h4>
                <h2>Isi formulir untuk melakukan kontak dengan kami</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!--Contact Form-->
                    <div class="contact-form style-two">
                        <form method="post" action="inc/sendemail.php" id="contact-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="form_name" value="" placeholder="Nama" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="form_phone" value="" placeholder="Nomor Telepon" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="form_subject" value="" placeholder="Judul" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="form_message" class="form-control" placeholder="Tulis pesan"></textarea>
                                </div>
                                <div class="form-group col-md-12 text-center">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Kirim Pesan</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
       </div>
    </section>
@endsection