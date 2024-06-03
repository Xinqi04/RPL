<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical+</title>
  <link rel="stylesheet" href="{{ asset('lg\login\login.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="{{ route('login-proses') }}" method="POST" class="sign-in-form">
            @csrf
            <div class="logo">
              <img src="" alt="Medical+">
              <h3>Medical+</h3>
            </div>
            
            <div class="heading">
              <h2>Masuk</h2>
            </div>
            <div class="actual-form">
              <div class="input-wrap">
                <input 
                  type="email" 
                  name="email"
                  class="input-field"
                  autocomplete="off"
                  id="email"
                  required
                  placeholder="Email"
                  />
                <label for="name">Email</label>
              </div>
              @error('email')
                <small>{{ $message }}</small>
              @enderror

              <div class="input-wrap">
                <input 
                  type="password" 
                  name="password"
                  minlength="4"
                  class="input-field"
                  autocomplete="off"
                  id="pass"
                  required
                  placeholder="Password"
                  />
                  <label for="pass">Password</label>
                </div>
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
                <p class="text">
                  <a href="#">Lupa Password</a>
                </p>

              <input type="submit" value="Log In" class="sign-btn">

              <div class="to-signup">
                <h6>Belum punya akun?</h6>
              <a href="{{ route('register') }}" class="toggle">Daftar disini!</a>
              </div>
              
            </div>
          </form>
        </div>
         
        <div class="carousel"></div>
      </div>
    </div>

  </main>
  

  <!-- js file -->
  <script src="{{ asset('lg\login\login.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if($message = Session::get('Failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
</body>
</html>