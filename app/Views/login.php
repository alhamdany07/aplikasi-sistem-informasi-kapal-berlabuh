<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | PPN Merauke</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        height: 100vh;
        background: linear-gradient(135deg, #0d1b3b, #1f2f5c);
        display: flex;
        justify-content: center;
        align-items: center;
        animation: fadeIn 1s ease-in;
    }

    .login-card {
        background: #ffffff;
        padding: 40px 45px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        width: 320px;
        text-align: center;
        animation: slideUp 0.8s ease;
    }

    .login-card img {
        height: 80px;
        margin-bottom: 15px;
        animation: float 3s ease-in-out infinite;
    }

    h3 {
        margin-bottom: 20px;
        color: #0d1b3b;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        outline: none;
        font-size: 14px;
        transition: border-color 0.3s ease;
    }

    input:focus {
        border-color: #0d1b3b;
    }

    button {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 8px;
        background: #102d5c;
        color: white;
        font-weight: 600;
        cursor: pointer;
        font-size: 15px;
        transition: background 0.3s ease, transform 0.1s;
    }

    button:hover {
        background: #173e7c;
        transform: scale(1.02);
    }

    .footer-text {
        margin-top: 15px;
        font-size: 12px;
        color: #7a7a7a;
    }

    /* Animasi */
    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    @keyframes slideUp {
        from {transform: translateY(40px); opacity: 0;}
        to {transform: translateY(0); opacity: 1;}
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-6px); }
    }
</style>
</head>
<body>
    <div class="login-card">
        <img src="<?= base_url('assets/img/logo.png') ?>" alt="Logo">
        <h3>Login</h3>
        <form action="<?= base_url('/auth') ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p class="footer-text">© <?= date('Y') ?> Pelabuhan Perikanan Nusantara Merauke</p>
    </div>
</body>
</html>
