@extends('layouts.app')
@section('web_title', "Layanan Kursus")
@section('description', "Ace Drive adalah lembaga kursus mobil yang terpercaya dan berpengalaman. Kami menyediakan pelatihan mengemudi yang komprehensif dan profesional untuk membantu Anda mengembangkan keterampilan mengemudi yang unggul. Dengan tim instruktur yang berkualitas dan pendekatan yang interaktif, kami bertekad membantu Anda meraih kepercayaan diri dan kemahiran dalam menguasai kendaraan. Bergabunglah dengan Ace Drive dan temukan pengalaman belajar mengemudi yang menginspirasi dan aman.")

@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image: url(assets/images/background/bg-4.jpg);">
  <div class="auto-container">
      <div class="content-box">
          <div class="content-wrapper">
              <ul class="bread-crumb">
                  <li><a href={{ url('/')}}>Home</a></li>
                  <li>Layanan Kursus</li>
              </ul>
              <div class="title">
                  <h1>Layanan Kursus</h1>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- Our Pricing -->
<section class="pricing-section">
  <div class="auto-container">
      <div class="row">
          <div class="col-lg-4 pricing-block">
              <div class="inner-box">
                  <div class="icon"><i class="flaticon-send"></i></div>
                  <h3>Basic</h3>
                  <div class="category">
                      <h4>Paket Dasar</h4>
                      <div class="price">Rp 1.500.000</div>
                  </div>
                  <ul>
                    <li> 10 x pertemuan</li>
                    <li> Instruktur profesional</li>
                    <li> max 1 Jam / ±20km</li>
                    <li> Biaya Pendaftaran 150rb</li>
                    <li class="not-available"> Antar-Jemput</li>
                    <li class="not-available"> Konsultasi pribadi dengan instruktur</li>
                </ul>
                  <div class="link-btn"><a href="#" class="btn-style-two">Pilih plan</a></div>
              </div>
          </div>
          <div class="col-lg-4 pricing-block active">
              <div class="inner-box">
                  <div class="icon"><i class="flaticon-shuttle"></i></div>
                  <h3>Regular</h3>
                  <div class="category">
                      <h4>Paket Lanjutan</h4>
                      <div class="price">Rp 3.000.000</div>
                  </div>
                  <ul>
                    <li> 15 x pertemuan</li>
                    <li> Instruktur profesional</li>
                    <li> max 2 Jam / ±40km</li>
                    <li> Biaya Pendaftaran 150rb</li>
                    <li class="not-available"> Antar-Jemput</li>
                    <li class="not-available"> Konsultasi pribadi dengan instruktur</li>
                </ul>
                  <div class="link-btn"><a href="#" class="btn-style-one">Pilih plan</a></div>
              </div>
          </div>
          <div class="col-lg-4 pricing-block">
              <div class="inner-box">
                  <div class="icon"><i class="flaticon-plane"></i></div>
                  <h3>Premium</h3>
                  <div class="category">
                      <h4>Paket Premium</h4>
                      <div class="price">Rp 6.000.000</div>
                  </div>
                  <ul>
                    <li> 20 x pertemuan</li>
                    <li> Instruktur profesional</li>
                    <li> max 2 Jam / ±40km</li>
                    <li> Biaya Pendaftaran 150rb</li>
                    <li> Antar-Jemput (Max 10km)</li>
                    <li> Konsultasi pribadi dengan instruktur</li>
                </ul>
                  <div class="link-btn"><a href="#" class="btn-style-two">Pilih plan</a></div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection