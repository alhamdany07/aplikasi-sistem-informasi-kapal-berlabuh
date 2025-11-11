<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'PPN Merauke'; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      display: flex;
      background: #f5f7fb;
      min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: 240px;
      background-color: #1565C0;
      color: white;
      display: flex;
      flex-direction: column;
      padding-top: 25px;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
    }

    .sidebar-logo {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 30px;
    }

    .sidebar-logo img {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      object-fit: cover;
      background: white;
      padding: 3px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .sidebar-logo span {
      font-size: 16px;
      font-weight: 600;
      letter-spacing: 0.5px;
      color: white;
    }

    .sidebar a {
      display: block;
      color: white;
      padding: 12px 20px;
      text-decoration: none;
      transition: 0.3s;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #0D47A1;
    }

    /* Header Bar */
    .header-bar {
      background: linear-gradient(90deg, #1565C0, #0D47A1);
      color: white;
      padding: 14px 20px;
      text-align: center;
      font-weight: 600;
      letter-spacing: 0.5px;
      width: 100%;
      position: fixed;
      left: 240px;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    /* Main content */
    .main-content {
      margin-left: 240px;
      margin-top: 60px; /* biar gak ketutupan header */
      flex: 1;
      padding: 30px;
      background: #f8faff;
      min-height: calc(100vh - 60px);
      display: flex;
      flex-direction: column;
    }

    /* Footer */
    footer {
      background: linear-gradient(90deg, #1565C0, #0D47A1);
      color: white;
      text-align: center;
      padding: 12px;
      font-size: 13px;
      font-weight: 400;
      margin-top: auto;
    }
  </style>
</head>

<body>
  <div class="sidebar">
    <div class="sidebar-logo">
      <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo PPN">
      <span>PPN MERAUKE</span>
    </div>

    <a href="<?= base_url('dashboard'); ?>" class="<?= uri_string() == 'dashboard' ? 'active' : ''; ?>">🏠 Dashboard</a>
    <a href="#">🚢 Data Kapal</a>
    <div style="padding-left: 25px;">
        <a href="<?= base_url('kapal/tiba'); ?>">• Kapal Tiba</a>
        <a href="<?= base_url('kapal/berangkat'); ?>">• Kapal Berangkat</a>
    </div>
    <a href="<?= base_url('logout'); ?>">🔒 Logout</a>
  </div>

  <div class="header-bar">
      WELCOME ADMIN | PELABUHAN PERIKANAN NUSANTARA MERAUKE
  </div>

  <div class="main-content">
