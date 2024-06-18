<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('lg/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Medical+</title>
</head>
<body>

  <!-- header section starts -->
  <header>

    <a href="#" class="logo"><i class="fas-fa-untensils"></i>medical+</a>

    <nav class="navbar">
      <a class="hide" href="{{ route('logout') }}">logout</a>
      <a class="active" href="#beranda">beranda</a>
      <a href="#artikel">artikel</a>
      <a href="#layanan">layanan</a>
      <a href="#kontak">kontak</a>
      <a href="{{ route('profile') }}">profil</a>
    </nav>

    
    <div class="login">
        <a href="{{ route('logout') }}">logout</a>
    </div> 
    
    <div class="menu-bars">
      <i class="fas fa-bars" id="menu-bars"></i>
    </div>

  </header>

  <!-- header section end -->

 <section class="welcome-section" id="beranda">
  <div class="welcome-text">
    <h1>Hallo, Selamat Datang</h1>
    <h2>Solusi Kesehatan Terbaik, <br>Hanya Untuk Anda</h2>
    <p>Kami di sini untuk mendukung Anda mencapai kesehatan optimal melalui informasi terpercaya dan layanan terbaik.</p>
    {{-- <div class="buttons">
      <a href="{{ asset('lg/login/login.html" class="btn login-btn') }}">Login</a>
      <a href="{{ asset('lg/login/login.html" class="btn login-btn') }}">Daftar</a>
    </div> --}}
  </div>
  <div class="doctor-image">
    <img src="{{ asset('lg/img/doctor.png') }}" alt="doctor">
  </div>
</section>

{{-- artikel --}}
<section class="slide-section">
  <div class="slideshow-container">
    <div class="mySlides">
      <img src="{{ asset('lg/img/Slideshow1.png') }}" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="{{ asset('lg/img/Slideshow2.png') }}" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="{{ asset('lg/img/Slideshow3.png') }}" style="width:100%">
    </div>
    <div class="mySlides">
      <img src="{{ asset('lg/img/Slideshow4.png') }}" style="width:100%">
    </div>
    <button class="prev" onclick="plusDivs(-1)">&#10094;</button>
    <button class="next" onclick="plusDivs(1)">&#10095;</button>
  </div>
</section>

<section class="article-section" id="artikel">
  <div class="article-header">
    <h1>MedicalPlus</h1>
    <p>Berawal dari langkah kecil namun penuh tekad pada tahun 1921, MedyBudy kini tengah melangkah menuju impian besar menjadi salah satu rumah sakit terkemuka di Jawa Barat. Dukungan dan kepercayaan masyarakat yang luar biasa telah menjadi pendorong utama kami dalam memberikan pelayanan terbaik. Sejak awal, antusiasme tinggi dari masyarakat telah menyertai setiap langkah kami, menginspirasi kami untuk terus berinovasi dan berkembang demi kesehatan bersama.</p>
  </div>

  <div class="article-service">
    <div class="service-info">
      <div class="service-show">
        <div class="service-logo">
          <img src="{{ asset('lg/img/service-icon1.png') }}" alt="">
        </div>
        <div class="service-text">
          <h3>Pelayanan Medis</h3>
          <p>Mulai dari fasilitas kesehatan mendasar hingga unit-unit perawatan khusus, MedyBudy dikenal sebagai pusat medis serbaguna yang terus berkembang untuk memenuhi tuntutan zaman.</p>
        </div>
      </div>  
      <div class="service-show">
        <div class="service-logo">
          <img src="{{ asset('lg/img/service-icon2.png') }}" alt="">
        </div>
        <div class="service-text">
          <h3>Rawat Inap</h3>
          <p>Kami berkomitmen memberikan perawatan bio-psiko-sosial-kultural dan spiritual sesuai kebutuhan pasien, berlandaskan visi, misi, dan kode etik keperawatan MedyBudy.</p>
        </div>
      </div>  
      <div class="service-show">
        <div class="service-logo" >
          <img src="{{ asset('lg/img/service-icon3.png') }}" alt="">
        </div>
        <div class="service-text">
          <h3>Penunjang Medis</h3>
          <p>MedyBudy menyediakan ruang khusus untuk kenyamanan pasien dan memastikan kebutuhan mereka selalu terpenuhi demi menjaga performa optimal.</p>
        </div>
      </div>  
    </div>
  </div>

  <div class="article-info">
    <h1>informasi</h1>
    <div class="article-list">

      <div class="article-show">
        <div class="article-img">
          <img src="https://picsum.photos/200/300?sig=1" alt="article-1">
        </div>
        <div class="article-text">
          <h3>Patah Tulang Panggul pada Lanjut Usia akibat Osteoporosis</h3>
          <p>Seiring bertambahnya usia, jumlah orang yang mengalami patah tulang panggul semakin meningkat. Patah tulang panggul...</p>
        </div>
      </div>

      <div class="article-show">
        <div class="article-img">
          <img src="https://picsum.photos/200/300?sig=2" alt="article-2">
        </div>
        <div class="article-text">
          <h3>Flu Singapura</h3>
          <p>Flu Singapura atau Hand Foot and Mouth Disease (HFMD) adalah penyakit yang disebabkan oleh virus dari genus Enterovirus. Spesies enterovirus yang paling sering menyebabkan HFMD adalah Coxsackievirus....</p>
        </div>
      </div>

      <div class="article-show">
        <div class="article-img">
          <img src="https://picsum.photos/200/300?sig=3" alt="article-1">
        </div>
        <div class="article-text">
          <h3>Ambulatory Blood Pressure Monitoring</h3>
            <p>Ambulatory Blood Pressure Monitoring atau ABPM adalah suatu metoda pengukuran tekanan darah selama 24 jam termasuk saat tidur, dan merupakan metoda akurat dalam...</p>
        </div>
      </div>
    </div>
  </div>
</section>
<hr>
<br>
<br>
<br>

<section class="services" id="layanan">
      <h1>We offer several services <br>To Improve Your Health</h1>
      <div class="services-container">
          <div class="service-box">
            <a href="{{ route('registrasi-janji-rs') }}">
              <img src="{{ asset('lg/img/buat_janji.png') }}" alt="Buat Janji RS">
              <h3>Buat Janji RS</h3>
              <p>Buat janji dengan mudah dan bebas antre</p>
            </a>
          </div>
          <div class="service-box">
            <a href="{{ route('rekam-medis') }}">
              <img src="{{ asset('lg/img/rekam_medis.png') }}" alt="Rekam Medis">
              <h3>Rekam Medis</h3> 
              <p>Rekam medis mencatat semua informasi kesehatan</p>
            </a>
          </div>
          <div class="service-box">
            <a href="{{ route('registrasi-labo') }}">
              <img src="{{ asset('lg/img/cek_labo.png') }}" alt="Cek Laboratorium">
              <h3>Cek Laboratorium</h3>
              <p>Cek lab tanpa ribet hanya dengan beberapa ketukan jari</p>
            </a>
          </div>
          <div class="service-box">
            <a href="{{ route('registrasi-radio') }}">
              <img src="{{ asset('lg/img/cek_radio.png') }}" alt="Cek Radiologi">
              <h3>Cek Radiologi</h3>
              <p>Cek Radiologi dengan hasil yang akurat</p>
            </a>
          </div>
          <div class="service-box" >
              <a href="{{ route('jadwal-dokter') }}">
                <img src="{{ asset('lg/img/jadwal_dok.png') }}" alt="Jadwal Dokter">
                <h3>Jadwal Dokter</h3>
                <p>Cek Jadwal Dokter yang praktik hari ini</p>
              </a>
          </div>
          <div class="service-box">
            <a href="{{ route('registrasi-pasien') }}">
              <img src="{{ asset('lg/img/rawat_inap.png') }}" alt="Fasilitas Rawat Inap">
              <h3>Daftar Pasien Baru</h3>
              <p>Daftarkan data diri untuk menggunakan layanan</p>
            </a>
          </div>
      </div>
</section>

  <!-- <section class="artikel">
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium necessitatibus aliquid dolor, ad facere a illum numquam voluptates. Exercitationem eos qui doloribus repudiandae esse officia vitae rerum. Enim, at ut.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium necessitatibus aliquid dolor, ad facere a illum numquam voluptates. Exercitationem eos qui doloribus repudiandae esse officia vitae rerum. Enim, at ut.</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium necessitatibus aliquid dolor, ad facere a illum numquam voluptates. Exercitationem eos qui doloribus repudiandae esse officia vitae rerum. Enim, at ut.</p>
  </section> -->
  <section class="kontak-container" id="kontak">
    <h1>Kontak Kami</h1>
    <div class="kontak">

        <div class="massage-form">
          <div class="info-kontak">
            <div class="display-kontak">
              <img src="{{ asset('lg/img/lokasi.png') }}" alt="">
              <div>
                <h3>lokasi</h3>
                <p>Jl. A.H. Nasution No.105, Kota Bandung, Jawa Barat.</p>
              </div>
            </div>
            <div class="display-kontak">
              <img src="{{ asset('lg/img/telepon.png') }}" alt="">
              <div>
                <h3>kontak</h3>
                <p>medybudy@gmail.com</p>
              </div>
            </div>
            <div class="display-kontak">
              <img src="{{ asset('lg/img/email.png') }}" alt="">
              <div>
                <h3>nomor</h3>
                <p>medybudy@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="form-kontak">
            <form action="" class="form-input">
              <div class="header-kontak">
                <div class="form-group">
                  <input type="text" id="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="email" id="email" placeholder="email">
                </div>
              </div>
              
              <div class="form-group">
                <input type="text" id="subject" placeholder="subject" >
              </div>
              <div class="form-group">
                <textarea id="pesan" placeholder="Pesan"></textarea>
              </div>
              <div class="button-submit">
                <button type="button" onclick="">Submit</button>
              </div>
            </form> 
  
          </div>
                 
        </div>
    </div>
  </section>


  <footer>
    <div class="emergency" id="kontak">
      <h3>Emergency call : 8888888</h3>
      <h3>Ambulance : 9999999</h3>
    </div>
    <div class="footer-text" id="profile">
      <h1>Our Profile</h1>
      <img src="img/oyenn.png" alt="" class="foto-profile">
      <p>MedicalPlus</p>
      <p>Social Media:
        <a href="https://www.instagram.com/your-instagram-username" target="_blank">Instagram</a>
      </p>
      <p>Contact: <a href="mailto:nirvvan.rasyid@gmail.com">medical_plus@gmail.com</a></p>
    </div>
  </footer>

<script src="{{ asset('lg/script.js') }}"></script>

<!-- <script>
    @if(session('success'))
      Swal.fire({
        title: 'Success!',
        text: "{{ session('success') }}",
        icon: 'success',
        confirmButtonText: 'OK'
      });
    @endif
</script> -->

<script>
    @if(session('pasien_success'))
      Swal.fire({
        title: 'Success!',
        text: "{{ session('pasien_success') }}",
        icon: 'success',
        confirmButtonText: 'OK'
      });
    @endif

    @if(session('login_success'))
      Swal.fire({
        title: 'Success!',
        text: "{{ session('login_success') }}",
        icon: 'success',
        confirmButtonText: 'OK'
      });
    @endif

    @if(session('labo_success'))
      Swal.fire({
        title: 'Success!',
        text: "{{ session('labo_success') }}",
        icon: 'success',
        confirmButtonText: 'OK'
      });
    @endif

    @if(session('radio_success'))
      Swal.fire({
        title: 'Success!',
        text: "{{ session('radio_success') }}",
        icon: 'success',
        confirmButtonText: 'OK'
      });
    @endif

    @if(session('janji_rs_success'))
      Swal.fire({
        title: 'Success!',
        text: "{{ session('janji_rs_success') }}",  
        icon: 'success',
        confirmButtonText: 'OK'
      });
    @endif
</script>


</body>
</html>