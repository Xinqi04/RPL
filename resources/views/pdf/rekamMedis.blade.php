<!DOCTYPE html>
<html>
<head>
    <title>Kop Surat MEDICAL+</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin: 0 auto;
            width: 80%;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            font-size: 20px;
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>MEDICAL+</h1>
        <p>Jl. Jend. Sudirman No. 123, Jakarta</p>
        <p>Telp: (021) 123-4567 | Email: info@medicalplus.com</p>
    </div>
    <div class="content">
        <div class="section">
            <h2>Data Pasien</h2>
            <table border="1" cellpadding="5" cellspacing="0" width="100%">
                <tr>
                    <th>Nama</th>
                    <td>{{ $pasien->nama }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->format('d F Y') }}</td>
                </tr>
                <tr>
                    <th>No HandPhone</th>
                    <td>{{ $pasien->no_hp }}</td>
                </tr>
            </table>
        </div>
        
        <div class="section">
            <h2>Rekam Medis</h2>
            <table border="1" cellpadding="5" cellspacing="0" width="100%">
                <tr>
                    <th>Tanggal</th>
                    <td>{{ \Carbon\Carbon::parse($rekamMedis->rawatJalan->tanggal_pemeriksaan)->format('d F Y') }}</td>
                </tr>
                <tr>
                    <th>Diagnosis</th>
                    <td>{{ $rekamMedis->diagnosa }}</td>
                </tr>
                <tr>
                    <th>Spesialis</th>
                    <td>{{ $rekamMedis->rawatJalan->jadwalDokter->dokter->spesialis->nama_spesialis }}</td>   
                </tr>
                <tr>
                    <th>Diperiksa Oleh</th>
                    <td>{{ $rekamMedis->rawatJalan->jadwalDokter->dokter->nama_dokter }}</td>
                </tr>
            </table>
        </div>
        
    </div>
</body>
</html>
