import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const spesialisInput = document.querySelector('.spesialis-input');
    const dokterInput = document.querySelector('.dokter-input');
    const lihatJadwalButton = document.getElementById('lihat-jadwal');
    const dokterMenu = document.querySelector('.dokter-menu');
    const namaDokter = document.querySelector('.nama-dokter');
    const spesialisDokter = document.querySelector('.spesialis-dokter');
    const jadwalBody = document.querySelector('.jadwal-body');
    
    spesialisInput.addEventListener('input', function() {
        const spesialis = spesialisInput.value;
        // Ambil daftar dokter berdasarkan spesialis yang dipilih
        fetch(`/api/dokter?spesialis=${spesialis}`)
            .then(response => response.json())
            .then(data => {
                dokterMenu.innerHTML = '';
                data.forEach(dokter => {
                    const li = document.createElement('li');
                    const a = document.createElement('a');
                    a.href = '#';
                    a.textContent = dokter.nama;
                    a.dataset.id = dokter.id;
                    a.dataset.nama = dokter.nama;
                    a.dataset.spesialis = spesialis;
                    li.appendChild(a);
                    dokterMenu.appendChild(li);
                });
            });
    });

    dokterMenu.addEventListener('click', function(event) {
        if (event.target.tagName === 'A') {
            event.preventDefault();
            dokterInput.value = event.target.textContent;
            dokterInput.dataset.id = event.target.dataset.id;
            namaDokter.textContent = event.target.dataset.nama;
            spesialisDokter.textContent = event.target.dataset.spesialis;
        }
    });

    lihatJadwalButton.addEventListener('click', function() {
        const dokterId = dokterInput.dataset.id;
        fetch(`/api/jadwal?dokter_id=${dokterId}`)
            .then(response => response.json())
            .then(data => {
                jadwalBody.innerHTML = '';
                data.forEach(jadwal => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `<td>${jadwal.senin}</td>
                                    <td>${jadwal.selasa}</td>
                                    <td>${jadwal.rabu}</td>
                                    <td>${jadwal.kamis}</td>
                                    <td>${jadwal.jumat}</td>`;
                    jadwalBody.appendChild(tr);
                });
            });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const spesialisInput = document.querySelector('.spesialis-input');
    const dokterInput = document.querySelector('.dokter-input');
    const spesialisMenuItems = document.querySelectorAll('.spesialis-menu li a');
    const dokterMenu = document.querySelector('.dokter-menu');
  
    spesialisMenuItems.forEach(item => {
      item.addEventListener('click', function(e) {
        e.preventDefault();
        const selectedSpesialis = this.getAttribute('data-spesialis');
        spesialisInput.value = selectedSpesialis;
        filterDokter(selectedSpesialis);
      });
    });
  
    function filterDokter(spesialis) {
      const dokterItems = dokterMenu.querySelectorAll('li');
      dokterItems.forEach(item => {
        const dokterSpesialis = item.getAttribute('data-spesialis');
        if (dokterSpesialis === spesialis) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    }
  
    // Clear dokter input when spesialis changes
    spesialisInput.addEventListener('input', function() {
      dokterInput.value = '';
      dokterMenu.querySelectorAll('li').forEach(item => {
        item.style.display = 'none';
      });
    });
  });
  


