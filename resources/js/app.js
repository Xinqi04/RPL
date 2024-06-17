import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
  // Fungsi untuk menampilkan dokter berdasarkan spesialis yang dipilih
  function filterDokterBySpesialis(spesialis) {
      // Lakukan request AJAX untuk mengambil data dokter
      $.ajax({
          url: '/api/dokter/' + spesialis,
          method: 'GET',
          success: function (response) {
              let dokterMenuHtml = '';
              response.dokter.forEach(function (dokter) {
                  dokterMenuHtml += `
                      <li data-spesialis="${dokter.spesialis}">
                          <a href="#" data-id="${dokter.id}" data-nama="${dokter.nama_dokter}" data-spesialis="${dokter.spesialis}">${dokter.nama_dokter}</a>
                      </li>
                  `;
              });
              document.querySelector('.dokter-menu').innerHTML = dokterMenuHtml;
              addDokterClickListener();
          },
          error: function () {
              alert('Gagal memuat data dokter.');
          }
      });
  }

  // Fungsi untuk menampilkan jadwal dokter berdasarkan dokter yang dipilih
  function showJadwalDokter(dokterId) {
      // Lakukan request AJAX untuk mengambil data jadwal dokter
      $.ajax({
          url: '/api/jadwal-dokter/' + dokterId,
          method: 'GET',
          success: function (response) {
              let jadwalDokterHtml = '';
              response.jadwal.forEach(function (jadwal) {
                  jadwalDokterHtml += `
                      <tr>
                          <td>${jadwal.senin}</td>
                          <td>${jadwal.selasa}</td>
                          <td>${jadwal.rabu}</td>
                          <td>${jadwal.kamis}</td>
                          <td>${jadwal.jumat}</td>
                      </tr>
                  `;
              });
              document.getElementById('jadwal-dokter-body').innerHTML = jadwalDokterHtml;
          },
          error: function () {
              alert('Gagal memuat data jadwal dokter.');
          }
      });
  }

  // Tambahkan event listener untuk setiap item spesialis
  document.querySelectorAll('.spesialis-menu a').forEach(function (item) {
      item.addEventListener('click', function (event) {
          event.preventDefault();
          let spesialis = this.getAttribute('data-spesialis');
          filterDokterBySpesialis(spesialis);
      });
  });

  // Tambahkan event listener untuk tombol lihat jadwal
  document.getElementById('lihat-jadwal').addEventListener('click', function () {
      let selectedDokter = document.querySelector('.dokter-menu li a.selected');
      if (selectedDokter) {
          let dokterId = selectedDokter.getAttribute('data-id');
          showJadwalDokter(dokterId);
      } else {
          alert('Silakan pilih dokter terlebih dahulu.');
      }
  });

  // Fungsi untuk menambahkan event listener pada item dokter
  function addDokterClickListener() {
      document.querySelectorAll('.dokter-menu a').forEach(function (item) {
          item.addEventListener('click', function (event) {
              event.preventDefault();
              document.querySelectorAll('.dokter-menu a').forEach(function (link) {
                  link.classList.remove('selected');
              });
              this.classList.add('selected');
          });
      });
  }
});
