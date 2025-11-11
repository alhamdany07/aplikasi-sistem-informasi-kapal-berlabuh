<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'Sistem Pelabuhan Nusantara Merauke'; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #f8faff;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #1565C0, #0D47A1);
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 30px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.15);
    }

    .navbar .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .navbar .logo img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: white;
      padding: 3px;
    }

    .navbar .logo span {
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 0.4px;
    }

    .navbar a {
      color: white;
      text-decoration: none;
      margin-left: 25px;
      font-weight: 500;
      transition: 0.3s;
    }

    .navbar a:hover {
      text-decoration: underline;
    }

    .content {
      max-width: 1100px;
      margin: 50px auto;
      padding: 0 20px;
    }

    footer {
      background: linear-gradient(90deg, #1565C0, #0D47A1);
      color: white;
      text-align: center;
      padding: 12px;
      font-size: 13px;
      margin-top: 60px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="logo">
      <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo PPN">
      <span>PPN MERAUKE</span>
    </div>
    <div>
      <a href="<?= base_url('/'); ?>">Home</a>
      <a href="<?= base_url('user/kapal_tiba'); ?>">Kapal Tiba</a>
      <a href="<?= base_url('user/kapal_berangkat'); ?>">Kapal Berangkat</a>
      <a href="<?= base_url('login'); ?>">Login</a>
    </div>
  </div>

  <div class="content">
