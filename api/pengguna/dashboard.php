<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard CafeKu</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #fdf2e9;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 800px;
            margin: 0 auto 40px auto;
        }
        .logo-title {
            font-weight: bold;
            font-size: 18px;
            color: #333;
            letter-spacing: 1px;
        }
        .btn-keluar {
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
        }
        .menu-container {
            display: flex;
            justify-content: center;
            gap: 25px;
            max-width: 800px;
            margin: 0 auto;
        }
        .menu-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px 20px;
            width: 220px;
            text-align: center;
            text-decoration: none;
            color: #333;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .menu-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
        }
        .menu-card .icon {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .menu-card h3 {
            margin: 10px 0;
            font-size: 20px;
            color: #222;
        }
        .menu-card span {
            display: block;
            background-color: #fdf5e6;
            padding: 6px 10px;
            border-radius: 6px;
            font-size: 12px;
            color: #555;
            margin-top: 12px;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="logo-title">CAFEKU INDONESIA</div>
        <a href="index.php" class="btn-keluar">keluar</a>
    </div>

    <div class="menu-container">
        <a href="pengguna.php" class="menu-card">
            <div class="icon">👥</div>
            <h3>Atur Pengguna</h3>
            <span>Tautan ke: <b>pengguna.php</b></span>
        </a>

        <a href="produk.php" class="menu-card">
            <div class="icon">📦</div>
            <h3>Atur Produk</h3>
            <span>Tautan ke: <b>produk.php</b></span>
        </a>
    </div>

</body>
</html>