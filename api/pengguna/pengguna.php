<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cafeku Indonesia</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #fdf2e9;
            margin: 0;
            padding: 30px 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 900px;
            margin: 0 auto 20px auto;
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
        .main {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 15px;
            max-width: 900px;
            margin: 0 auto;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .judultabel {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .btn-tambah {
            display: inline-block;
            background-color: #f5b041;
            color: #333;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .tabel {
            width: 100%;
            border-collapse: collapse;
        }
        .tabel th {
            background-color: #f5b041;
            color: #333;
            padding: 12px;
            text-align: center;
            font-size: 14px;
        }
        .tabel th:first-child { border-top-left-radius: 8px; border-bottom-left-radius: 8px; }
        .tabel th:last-child { border-top-right-radius: 8px; border-bottom-right-radius: 8px; }
        .tabel td {
            padding: 12px;
            text-align: center;
            color: #555;
            font-size: 14px;
            border-bottom: 1px solid #f2f2f2;
        }
        .btn-action {
            background-color: #f5b041;
            border: none;
            padding: 6px 12px;
            border-radius: 5px;
            color: #333;
            cursor: pointer;
            font-size: 12px;
            font-weight: bold;
            text-decoration: none;
            margin: 0 2px;
            display: inline-block;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo-title">CAFEKU INDONESIA</div>
    <a href="index.php" class="btn-keluar">keluar</a>
</div>

<div class='main'>
    <p class='judultabel'>Daftar Pengguna</p>
    
    <a href='tambahpengguna.php' class="btn-tambah">Tambah Data Pengguna</a>

    <?php
    include("api/pengguna/selectpengguna.php");
    ?>

    <table class='tabel'>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Aksi</th>
        </tr>

        <?php
        if (isset($datas) && count($datas) > 0) {
            for ($i = 0; $i < count($datas); $i++) { 
        ?>
            <tr>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo $datas[$i]['nama']; ?></td>
                <td><?php echo $datas[$i]['username']; ?></td>
                <td><?php echo $datas[$i]['alamat']; ?></td>
                <td><?php echo $datas[$i]['nohp']; ?></td>
                <td>
                    <a href="editpengguna.php?id=<?php echo $datas[$i]['id']; ?>" class="btn-action">Edit</a>
                    <a href="hapuspengguna.php?id=<?php echo $datas[$i]['id']; ?>" class="btn-action" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php 
            }
        }
        ?>
    </table>
</div>

</body>
</html>