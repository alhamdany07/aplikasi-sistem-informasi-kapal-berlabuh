<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelabuhan Perikanan Nusantara Merauke</title>
    <link rel="icon" href="<?= base_url('assets/img/logo.png') ?>">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(180deg, #0c1a33 0%, #1f2a44 100%);
            color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #102445;
            padding: 10px 50px;
            color: white;
        }

        header .left {
            display: flex;
            align-items: center;
        }

        header img {
            height: 50px;
            margin-right: 15px;
        }

        header h1 {
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        nav a {
            text-decoration: none;
            color: white;
            margin-left: 20px;
            font-weight: 500;
            transition: 0.3s;
        }

        nav a:hover {
            color: #f1c40f;
        }

        /* Tombol Home */
        .btn-home {
            background: #f1c40f;
            color: #0c1a33;
            padding: 8px 18px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
        }

        .btn-home:hover {
            background: #f39c12;
        }

        /* Konten utama */
        main {
            flex: 1;
            text-align: center;
            padding: 80px 20px;
        }

        main h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        main p {
            font-size: 15px;
            line-height: 1.6;
            max-width: 700px;
            margin: auto;
            color: #dcdcdc;
        }

        /* Wave bawah */
        .wave {
            position: relative;
            bottom: -4px;
        }
    </style>
</head>
<body>
    <header>
        <div class="left">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo">
            <h1>PELABUHAN PERIKANAN NUSANTARA MERAUKE</h1>
        </div>
        <nav>
            <a href="#" class="btn-home">Home</a>
            <a href="<?= base_url('/login') ?>">Login</a>
        </nav>
    </header>

    <main>
        <h2>Selamat Datang di Sistem Pelabuhan Nusantara Merauke</h2>
        <p>
            Pelabuhan Nusantara di Merauke, Papua adalah Pelabuhan Perikanan Nusantara (PPN) Merauke. Pelabuhan ini memiliki peran strategis sebagai Pelabuhan Perikanan Lingkar Luar Wilayah Perairan Indonesia (Outer Ring Fishing Port) di perbatasan Indonesia dengan Papua New Guinea dan Australia, serta berperan penting dalam pengembangan perikanan tangkap di wilayah timur.
        </p>
    </main>

    <!-- Wave -->
    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
        <path fill="#ffffff" fill-opacity="1" d="M0,160L60,170.7C120,181,240,203,360,192C480,181,600,139,720,117.3C840,96,960,96,1080,106.7C1200,117,1320,139,1380,149.3L1440,160L1440,200L1380,200C1320,200,1200,200,1080,200C960,200,840,200,720,200C600,200,480,200,360,200C240,200,120,200,60,200L0,200Z"></path>
    </svg>
</body>
</html>
