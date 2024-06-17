<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('lg/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <title>Mediacal+</title>
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
  
      <div class="show-form" style="text-align: center">
         <h1 style="font-size: 3rem; margin-bottom: 1rem"> Jadwal Dokter</h1>
         <form action="/dokters/{{ $dokter->nama_dokter }}" method="GET">
            <div class="info-dokter">
               <div class="dokter-img">
                  <img src="" alt="foto dokter">
               </div>
               <h2>{{ $dokter->nama_dokter }}</h2>
               <p>{{ $dokter->spesialis->nama_spesialis }}</p>
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
                            @php
                            $daysOfWeek = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];
                            $jadwalByDay = [];
                
                            // Mengelompokkan jadwal berdasarkan hari
                            foreach ($dokter->jadwal as $jadwal) {
                               $jadwalByDay[$jadwal->hari][] = $jadwal;
                            }
                         @endphp
                
                         @foreach ($daysOfWeek as $day)
                            <td>
                               @if (isset($jadwalByDay[$day]))
                                  @foreach ($jadwalByDay[$day] as $jadwal)
                                     {{ substr($jadwal->jam_mulai, 0, 5) }}-{{ substr($jadwal->jam_selesai, 0, 5) }}<br>
                                  @endforeach
                               @else
                                 -
                                  {{-- &nbsp; <!-- Kosongkan jika tidak ada jadwal --> --}}
                               @endif
                            </td>
                         @endforeach
                        </tr>
                       
                     </tbody>
                  </table>
               </div>
            </div>
         </form>
         
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