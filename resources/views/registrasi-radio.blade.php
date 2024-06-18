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

    <div class="welcome-text"
        style="margin: 0 0 0; margin-top: 10rem; margin-bottom: 2rem; width: 100%; height:100%; text-align:center; justify-content: center; display: flex; padding: .4rem; max-width: 100%;">
        <h2>Registrasi <br>Cek Radiologi</h2>
    </div>

    <form action="{{ route('registrasi-radio-proses') }}" method="POST" style="max-width: none; font-size: 2rem">
        @csrf
        <div class="form-box" style="margin-top: 0; padding-top: 1rem; padding-bottom: 1rem; margin-bottom: 10rem;">

            <div class="show-form-box">
                <div class="show-form" style="height: auto; padding: 4rem">
                    <div class="daftar pasien">
                        <div class="dropdown">
                            <p style="font-size: 2rem; font-weight: bolder; color: #63C4AB">Pilih pasien</p>
                            <div class="select">
                                <span class="selected">
                                    <select name="nama_pasien" class="search" required>
                                        <option value="" disabled selected>Daftar Nama Pasien</option>
                                        @foreach ($user->pasiens as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-form" style="margin: 0; height: auto; padding: 6rem">
                    <div class="actual-form">
                        <div class="dropdown">
                            <p>Pilih Kategori Cek</p>
                            <div class="select">
                                <span class="selected">
                                    <select name="spesialis" class="search" required>
                                        <option value="" disabled selected>Pilih Kategori Cek</option>
                                        @foreach ($kategori as $k)
                                            <option value="{{ $k }}">{{ $k }}</option>
                                        @endforeach
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="input-wrap" style="margin-top: 1rem; font-weight: 600; margin-bottom: 4rem">
                            <p style="font-weight: bolder">Pilih Tanggal</p>
                            <input type="date" name="tanggal_diperiksa" class="input-field" autocomplete="off" required placeholder="Tanggal Lahir" style="font-size: 1.5rem" min="{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}" />
                        </div>
                    </div>
                    <input type="submit" value="submit" class="button">
                </div>
            </div>
        </div>
    </form>

    <footer style="margin-top: 200px">
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
