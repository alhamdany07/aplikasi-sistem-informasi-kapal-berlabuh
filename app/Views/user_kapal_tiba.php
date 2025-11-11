<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kapal Tiba | PPN Merauke</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
      box-sizing: border-box;
    }

    body {
      margin: 0;
      background: #f4f6fb;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background-color: #1E88E5;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 30px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      flex-wrap: wrap;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .logo img {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: white;
      padding: 4px;
    }

    .logo h2 {
      font-size: 18px;
      margin: 0;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    nav a {
      color: white;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 500;
      transition: opacity 0.3s;
    }

    nav a:hover {
      opacity: 0.8;
    }

    main {
      flex: 1;
      padding: 40px 10%;
    }

    h2 {
      color: #0d47a1;
      font-size: 22px;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    th {
      background: #1565C0;
      color: white;
      padding: 12px;
      text-align: center;
      font-weight: 600;
    }

    td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #e0e0e0;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    footer {
      background-color: #1E88E5;
      color: white;
      text-align: center;
      padding: 12px 0;
      margin-top: auto;
      font-size: 13px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="<?= base_url('assets/img/logo-kkp.png') ?>" alt="Logo KKP">
      <h2>PPN MERAUKE</h2>
    </div>
    <nav>
      <a href="<?= base_url('/user') ?>">Home</a>
      <a href="<?= base_url('/user/kapal_tiba') ?>">Kapal Tiba</a>
      <a href="<?= base_url('/user/kapal_berangkat') ?>">Kapal Berangkat</a>
      <a href="<?= base_url('/login') ?>">Login</a>
    </nav>
  </header>

  <main>
    <h2>📍 Data Kapal Tiba</h2>
    <table>
      <tr>
        <th>No</th>
        <th>Nama Kapal</th>
        <th>Tanda Selar</th>
        <th>Tanggal Tiba</th>
      </tr>
      <?php if (!empty($kapal)) : ?>
        <?php $no = 1; foreach ($kapal as $k) : ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($k['nama_kapal']) ?></td>
            <td><?= esc($k['tanda_selar']) ?></td>
            <td><?= date('d M Y', strtotime($k['tanggal_tiba'])) ?></td>
          </tr>
        <?php endforeach; ?>
      <?php else : ?>
        <tr><td colspan="4">Tidak ada data kapal tiba.</td></tr>
      <?php endif; ?>
    </table>
  </main>

  <footer>
    © <?= date('Y') ?> Pelabuhan Perikanan Nusantara Merauke — Kementerian Kelautan dan Perikanan RI.
  </footer>

</body>
</html>
