<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Dashboard Pelanggan - Bengkel Berkat Yakin</title>
  <style>
    * {margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif;}

    body {
      display: flex;
      min-height: 100vh;
      background-color: #f4f6f8;
    }

    /* Sidebar */
    .sidebar {
      width: 230px;
      background-color: #0b6e4f;
      color: #fff;
      display: flex;
      flex-direction: column;
      padding: 20px;
    }
    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .sidebar a {
      color: #fff;
      text-decoration: none;
      padding: 12px 15px;
      border-radius: 8px;
      margin-bottom: 10px;
      display: block;
      transition: 0.3s;
    }
    .sidebar a:hover, .sidebar a.active {
      background-color: #128f64;
    }

    /* Main content */
    .main-content {
      flex: 1;
      padding: 25px;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
    }

    header h1 {
      font-size: 22px;
      color: #333;
    }

    /* Cards */
    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .card h3 {
      color: #0b6e4f;
      margin-bottom: 10px;
      font-size: 18px;
    }

    .card p {
      color: #555;
      font-size: 15px;
    }

    /* Tabel */
    .section {
      margin-top: 40px;
      background: #fff;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }

    .section h2 {
      margin-bottom: 15px;
      color: #0b6e4f;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 12px 10px;
      border-bottom: 1px solid #ddd;
      text-align: left;
      font-size: 15px;
    }

    table th {
      background-color: #0b6e4f;
      color: #fff;
    }

    table tr:hover {
      background-color: #f2f2f2;
    }

    footer {
      margin-top: 30px;
      text-align: center;
      color: #888;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Berkat Yakin</h2>
    <a href="#" class="active">🏠 Dashboard</a>
    <a href="#booking">🧾 Booking Saya</a>
    <a href="#history">🛠️ History Servis</a>
  </div>

  <div class="main-content">
    <header>
      <h1>Dashboard Pelanggan</h1>
    </header>

    <!-- Ringkasan -->
    <div class="cards">
      <div class="card">
        <h3>Total Booking</h3>
        <p>5 kali booking layanan.</p>
      </div>
      <div class="card">
        <h3>Layanan Aktif</h3>
        <p>1 layanan sedang dikerjakan.</p>
      </div>
      <div class="card">
        <h3>Riwayat Servis</h3>
        <p>4 layanan telah selesai.</p>
      </div>
    </div>

    <!-- Booking Saya -->
    <div id="booking" class="section">
      <h2>Booking Saya</h2>
      <table>
        <thead>
          <tr>
            <th>Tanggal Booking</th>
            <th>Nama</th>
            <th>Tipe Mobil</th>
            <th>Layanan</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>14 Oktober 2025</td>
            <td>Novira</td>
            <td>Toyota Avanza</td>
            <td>Ganti Oli Mesin</td>
            <td>Menunggu</td>
          </tr>
          <tr>
            <td>5 Oktober 2025</td>
            <td>Novira</td>
            <td>Daihatsu Xenia</td>
            <td>Ganti Filter Oli</td>
            <td>Selesai</td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- History Servis -->
    <div id="history" class="section">
      <h2>Riwayat Servis</h2>
      <table>
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Jenis Layanan</th>
            <th>Tipe Mobil</th>
            <th>Biaya</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>25 September 2025</td>
            <td>Ganti Air Radiator</td>
            <td>Honda Jazz</td>
            <td>Rp 90.000</td>
            <td>Selesai</td>
          </tr>
          <tr>
            <td>1 Agustus 2025</td>
            <td>Ganti Oli Gardan</td>
            <td>Toyota Rush</td>
            <td>Rp 250.000</td>
            <td>Selesai</td>
          </tr>
        </tbody>
      </table>
    </div>

    <footer>
      © 2025 Bengkel Berkat Yakin.
    </footer>
  </div>

</body>
</html>
