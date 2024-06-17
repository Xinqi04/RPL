<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medical+</title>
  <link rel="stylesheet" href="{{ asset('lg\login\login.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css" integrity="sha512-oe8OpYjBaDWPt2VmSFR+qYOdnTjeV9QPLJUeqZyprDEQvQLJ9C5PCFclxwNuvb/GQgQngdCXzKSFltuHD3eCxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form action="{{ route('login-proses') }}" method="POST" class="sign-in-form" id="form-login">
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if($message = Session::get('Failed'))
        <script>
            Swal.fire('{{ $message }}');
        </script>
    @endif
    
    <script>
      toastr.options.progressBar = true;

      $(document).ready(function() {
          $('#form-login').submit(function(e) {
              e.preventDefault();
              var formData = $(this).serialize();
              $.ajax({
                  url: "{{ route('login-proses') }}",
                  type: "POST",
                  data: formData,
                  dataType: 'json',
                  success: function(response) {
                      toastr.success(response
                      .message); // Tampilkan toast dengan pesan dari backend
                      toastr.options.progressBar = true;
                      // Redirect berdasarkan role_id setelah delay
                      setTimeout(function() {
                          if (false) {
                              window.location.href = "{{ route('index') }}";
                          } else if (true) {
                              window.location.href = "{{ route('laman-masuk') }}";
                          } else {
                              toastr.error('Role not recognized');
                          }
                      },
                      1500); // Delay 3 detik sebelum redirect (sesuaikan durasi sesuai kebutuhan)
                  },
                  error: function(xhr, status, error) {
                      toastr.error(xhr.responseJSON
                      .message); // Tampilkan toast error jika login gagal
                  }
              });
          });
      });

      @if (session()->has('success'))
          toastr.success("{{ session('success') }}");
      @endif
  </script>
</body>
</html>