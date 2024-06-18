<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('lg/login/login.css') }}">
  <link rel="stylesheet" href="{{ asset('lg/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Medical+</title>
</head>
<body>

  <!-- header section starts -->
  <header style="max-width: 100%">
    <a href="{{ route('laman-utama') }}" class="logo"><i class="fas fa-utensils"></i>medical+</a>
    <nav class="navbar">
      <a href="#login">login</a>
      <a class="active" href="#beranda">beranda</a>
      <a href="#artikel">artikel</a>
      <a href="#layanan">layanan</a>
      <a href="#kontak">kontak</a>
    </nav>
    <div class="menu-bars">
      <i class="fas fa-bars" id="menu-bars"></i>
    </div>
  </header>

  <div class="welcome-text" style="margin: 0 0 0; margin-top: 10rem; margin-bottom: 2rem; width: 100%; height:100%; text-align:center; justify-content: center; display: flex; padding: .4rem; max-width: 100%;">
    <h2>Rekam Medis</h2>
  </div>

  <div>
    <div class="container">
      <div class="pasien">
        <div class="card">
          <div class="card-form">
            <div class="card-img">
              <img src="{{ asset('lg/img/person.png') }}" width="96" height="96" style="border: none">
            </div>
            <div class="card-text">
              <h2 style="font-size: 2.5rem; margin-bottom: .5rem; font-weight: bolder">{{ $pasien->nama }}</h2>
              <p style="font-size: 1.3rem">{{ $pasien->id }} - <span>{{ \Carbon\Carbon::now()->format('d F Y') }}</span></p>
            </div>
            <div>
              <img class="people" src="{{ asset('lg/img/people.png') }}" alt="" width="96" height="96">
            </div>
          </div>
        </div>
      </div>
      <div class="riwayat">
        <h2>Riwayat Pasien</h2>
        @foreach($pasien->rekamMedis as $data)
        <div class="card">
          <div class="card-form" style="position: relative;">
            <div class="card-img">
              <img src="{{ asset('lg/img/service-icon3.png') }}" width="96" height="96" style="border: none">
            </div>
            <div class="card-text">

              <h3>{{ \Carbon\Carbon::parse($data->rawatJalan->tanggal_pemeriksaan)->format('d F Y') }}</h3>
               <h4>{{ $data->rawatJalan->jadwalDokter->dokter->nama_dokter }} | <span>{{ $data->rawatJalan->jadwalDokter->dokter->spesialis->nama_spesialis }}</span> </h4> 
              <p>{{ $data->diagnosa }}</p>
              {{-- <p>Rawat Jalan: {{ $data->rawatJalan->details }}</p> --}}
            </div>
            <div style="position: absolute; bottom: 0; right: 0; margin: 1rem;">
              <button onclick="window.location.href='{{ route('lihat-rekam-medis',['id' => $data->id]) }}?export=pdf'" class="button" type="button" style="align-items: end; justify-content:end; margin-bottom: -2rem; padding-left: 1.5rem; padding-right: 1.5rem; font-size: 1rem; height: 20px">Download PDF</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <footer style="">
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
  <script src="{{ asset('lg/dropdown.js') }}"></script>
  
</body>
</html>
