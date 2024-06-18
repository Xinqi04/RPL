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

    <nav class="navbar">
      <a class="hide" href="{{ route('logout') }}">logout</a>
      <a class="active" href="#beranda">beranda</a>
      <a href="#artikel">artikel</a>
      <a href="#layanan">layanan</a>
      <a href="#kontak">kontak</a>
      <a href="{{ route('profile') }}">profil</a>
    </nav>

    
    <div class="menu-bars">
      <i class="fas fa-bars" id="menu-bars"></i>
    </div>

  </header>


  <div class="profil-user">
   <div class="background-profil">
      <img src="{{ asset('lg/img/profilebg.png') }}" alt="">
   </div>
   <div class="profil-form">
      <div class="profil-pic">
         <img src="{{ asset('lg/img/person.png') }}" alt="">
         
      </div>
      <div class="profil-info">
         <h1>{{ $user->name }}</h1>
         <p  style="text-transform: lowercase;">{{ $user->email }}</p>
         <p>{{ $user->id }}, dibuat pada {{ \Carbon\Carbon::parse($user->created_at)->format('d F Y') }}</p>
      </div>
      
      <div class="pasien-terdaftar">
         <h1>pasien yang terdaftar</h1>
         <div class="pasien">
            @foreach ($user->pasiens as $p)
            <a style="color: inherit; text-decoration: none" href="{{ route('lihat-rekam-medis',['id' => $p->id]) }}">
               <div class="card">
                  <div class="card-form">
                     <div class="card-img">
                        <img src="{{ asset('lg/img/person.png') }}" width="96" height="96" style="border: none">
                     </div>
                     <div class="card-text">
                        <h2 style="font-size: 2.5rem; margin-bottom: .5rem; font-weight: bolder">{{ $p->nama }}</h2>
                        <p style="font-size: 1.3rem">Tanggal Lahir : <span>{{ $p->tanggal_lahir }}</span></p>
                     </div>
                     <div>
                        <img class="people" src="{{ asset('lg/img/people.png') }}" alt="" width="96" height="96">
                     </div>
                  </div>
               </div>
            </a>    
            @endforeach
         </div>
      </div>
      <div class="button-logout">
         <a class="button-submit" href="{{ route('logout') }}">log out</a>
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