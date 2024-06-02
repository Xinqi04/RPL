<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome -->
  <link rel="stylesheet" href="{{ asset('lg/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('lg/style.css') }}">

  <title>Mediacl+</title>
</head>
<body>

  <!-- header section starts -->
  <header>

    <a href="#" class="logo"><i class="fas-fa-untensils"></i>medical+</a>

    <nav class="navbar">
      <a href="#login">login</a>
      <a class="active" href="#beranda">beranda</a>
      <a href="#artikel">artikel</a>
      <a href="#layanan">layanan</a>
      <a href="#kontak">kontak</a>
    </nav>

    
    <div class="login">
        <a href="{{ route('login') }}">Login</a>
    </div> 
    
    <div class="menu-bars">
      <i class="{{ asset('lg/fas fa-bars" id="menu-bars') }}"></i>
    </div>

  </header>

  <!-- header section end -->
  
  <section class="welcome-section" id="beranda">
    <div class="welcome-text">
      <h1>Hallo, Selamat Datang</h1>
      <h2>Solusi Kesehatan Terbaik, <br>Hanya Untuk Anda</h2>
      <p>Kami di sini untuk mendukung Anda mencapai kesehatan optimal melalui informasi terpercaya dan layanan terbaik.</p>
      <div class="buttons">
        <a href="{{ asset('lg/login/login.html" class="btn login-btn') }}">Login</a>
        <a href="{{ asset('lg/login/login.html" class="btn login-btn') }}">Daftar</a>
      </div>
    </div>
    <div class="doctor-image">
      <img src="{{ asset('lg/img/doctor.png') }}" alt="doctor">
    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="services" id="layanan">
        <h1>We offer several services <br>To Improve Your Health</h1>
        <div class="services-container">
            <div class="service-box">
                <img src="{{ asset('lg/img/buat_janji.png') }}" alt="Buat Janji RS">
                <h3>Buat Janji RS</h3>
                <p>Buat janji dengan mudah dan bebas antre</p>
            </div>
            <div class="service-box">
                <img src="{{ asset('lg/img/rekam_medis.png') }}" alt="Rekam Medis">
                <h3>Rekam Medis</h3> 
                <p>Rekam medis mencatat semua informasi kesehatan</p>
            </div>
            <div class="service-box">
                <img src="{{ asset('lg/img/cek_labo.png') }}" alt="Cek Laboratorium">
                <h3>Cek Laboratorium</h3>
                <p>Cek lab tanpa ribet hanya dengan beberapa ketukan jari</p>
            </div>
            <div class="service-box">
                <img src="{{ asset('lg/img/cek_radio.png') }}" alt="Cek Radiologi">
                <h3>Cek Radiologi</h3>
                <p>Cek Radiologi dengan hasil yang akurat</p>
            </div>
            <div class="service-box">
                <img src="{{ asset('lg/img/jadwal_dok.png') }}" alt="Jadwal Dokter">
                <h3>Jadwal Dokter</h3>
                <p>Lorem Ipsum.</p>
            </div>
            <div class="service-box">
                <img src="{{ asset('lg/img/rawat_inap.png') }}" alt="Fasilitas Rawat Inap">
                <h3>Fasilitas Rawat Inap</h3>
                <p>Lorem Ipsum.</p>
            </div>
        </div>
    </section>

    <!-- <section class="artikel">
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium necessitatibus aliquid dolor, ad facere a illum numquam voluptates. Exercitationem eos qui doloribus repudiandae esse officia vitae rerum. Enim, at ut.</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium necessitatibus aliquid dolor, ad facere a illum numquam voluptates. Exercitationem eos qui doloribus repudiandae esse officia vitae rerum. Enim, at ut.</p>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium necessitatibus aliquid dolor, ad facere a illum numquam voluptates. Exercitationem eos qui doloribus repudiandae esse officia vitae rerum. Enim, at ut.</p>
    </section> -->
  <script src="{{ asset('lg/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if($message = Session::get('succes'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
  @endif
</body>
</html>