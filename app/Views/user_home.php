<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda | PPN Merauke</title>
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

    /* Header */
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

    nav {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
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

    /* Hero Section */
    .hero {
      position: relative;
      height: 400px;
      background: url('<?= base_url("assets/img/pelabuhan.jpg") ?>') center/cover no-repeat;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
    }

    .hero::after {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.45);
    }

    .hero h1 {
      position: relative;
      font-size: 28px;
      z-index: 1;
      margin: 0;
      font-weight: 600;
    }

    .hero p {
      position: relative;
      max-width: 700px;
      margin: 15px auto 0 auto;
      z-index: 1;
      font-size: 15px;
      line-height: 1.6;
    }

    /* Footer */
    footer {
      background-color: #1E88E5;
      color: white;
      text-align: center;
      padding: 12px 0;
      margin-top: auto;
      font-size: 13px;
    }

    /* Responsif */
    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav a {
        margin: 10px 15px 0 0;
        display: inline-block;
      }

      .hero h1 {
        font-size: 22px;
      }

      .hero p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <!-- Ganti logo-kkp.png sesuai nama file kamu -->
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

  <section class="hero">
    <h1>Selamat Datang di Sistem Pelabuhan Perikanan Nusantara Merauke</h1>
    <p>Pelabuhan Perikanan Nusantara Merauke (PPN) merupakan bagian dari Kementerian Kelautan dan Perikanan
       yang berperan penting dalam pengelolaan dan pengembangan perikanan di wilayah timur Indonesia.</p>
  </section>

  <footer>
    © <?= date('Y') ?> Pelabuhan Perikanan Nusantara Merauke — Kementerian Kelautan dan Perikanan RI.
  </footer>

</body>
</html>
