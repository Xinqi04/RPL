<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('lg\login\login.css') }}">
  <link rel="stylesheet" href="{{ asset('lg/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Medical+</title>
</head>
<body>

  <!-- header section starts -->
  <header style="max-width: 100%">

    <a href="#" class="logo"><i class="fas-fa-untensils"></i>medical+</a>

    <nav class="navbar" >
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

  <div class="welcome-text" style="margin: 0 0 0; margin-top: 10rem; width: 100%; height:100%; text-align:center; justify-content: center; display: flex; padding: .4rem; max-width: 100%;">
   <h2>Registrasi <br>Pasien Baru</h2>
 </div>

  <div class="form-box" style="margin-top: 0; padding-top: 1rem; padding-bottom: 1rem">
   <div class="show-form-box">
      <div class="input-form" style="margin: 0; height: auto; padding: 6rem">
         <form action="{{ route('registrasi-pasien-proses') }}" method="POST" enctype="multipart/form-data" style="max-width: none; font-size: 2rem">
          @csrf
            <div class="actual-form">
               <div class="input-wrap" style="margin-top: 3rem">
                  <p>Nama Pasien</p>
                  <input 
                   type="text" 
                   name="nama_pasien"
                   class="input-field"
                   autocomplete="off"
                   required
                   placeholder="Masukan Nama Pasien"
                   />
               </div>
               <div class="input-wrap" style="margin-top: 3rem">
                  <p>Tanggal lahir</p>
                  <input 
                   type="date" 
                   name="tanggal_lahir"
                   class="input-field"
                   autocomplete="off"
                   required
                   placeholder="Tanggal Lahir"
                   />
                 </div>
                 <div class="input-wrap" style="margin-top: 3rem">
                  <p>Nomor Telepon</p>
                  <input 
                   type="text" 
                   name="no_hp"
                   class="input-field"
                   autocomplete="off"
                   required
                   placeholder="Masukan Nomor handphone"
                   />
                 </div>
               <p style="margin-top: 4rem">Upload foto ktp</p>               
               <input type="file" name="photo" value="browse" class="form-control" > 
             </div>
         <input type="submit" value="submit" class="button">
         </form>
     </div>

      <div class="show-form" style="height: auto; padding: 4rem">
         <img src="{{ asset('lg/img/placeholder.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover; box-sizing: border-box;">
      </div>
   </div>
  </div>



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
  <script src="{{ asset('lg/dropdown.js') }}"></script>
  
</body>
</html>