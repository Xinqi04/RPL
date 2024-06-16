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


  <div class="form-box">
   <div class="show-form-box">
      <div class="input-form">
         <div class="dropdown-spesialis">
             <div class="dropdown">
               <p>pilih spesialis dokter</p>
                 <div class="select">
                     <span class="selected">
                        <input name="spesialis" class="search" placeholder="Pilih Spesialis Dokter">
                     </span>
                     <div class="caret"></div>
                 </div>
                 <ul class="menu">
                  @foreach($spesialis as $dokter)
                   <li><a href="" data-spesialis="" >{{ $dokter->spesialis }}</a></li>
                  @endforeach
                 </ul>
             </div>
         </div>
 
         <div class="dropdown-dokter">
             <div class="dropdown">
               <p>pilih nama dokter</p>
                 <div class="select">
                     <span class="selected"><input type="text" class="search dokter-input" placeholder="Pilih Nama Dokter"></span>
                     <div class="caret"></div>
                     
                 </div>
                 <ul class="menu" >
                  @foreach ($dokters as $dokter)
                     <li><a style="text-decoration: none; color: inherit" href="{{ route('dokters', ['dokter' => $dokter->nama_dokter]) }}">{{ $dokter->nama_dokter }}</a></li>
                  @endforeach
                     
                 </ul>
             </div>
         </div>
         <input name="nama_dokter" type="submit" value="Lihat Jadwal" class="button">
     </div>

      <div class="show-form">
         <div class="info-dokter">
            <div class="dokter-img">
               <img src="" alt="foto dokter">
            </div>
            <h2>Nama Dokter</h2>
            <p>Spesialis Dokter</p>
            <div class="jadwal-hari">
               <table>
                  <thead>
                     <tr>
                        <td>senin</td>
                        <td>selasa</td>
                        <td>rabu</td>
                        <td>kamis</td>
                        <td>jumat</td>
                     </tr>
                  </thead>
                  <tbody>
                     
                     <tr>
                        <td>08.00</td>
                        <td></td>
                     </tr>
                    
                  </tbody>
               </table>
            </div>
         </div>
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
  <script src="{{ asset('js/app.js') }}"></script>
  
</body>
</html>