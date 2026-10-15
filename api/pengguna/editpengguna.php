<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Pengguna</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #fdf2e9;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
        }
        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .judul {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .inputuser {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .tombol {
            width: 100%;
            background-color: #f5b041;
            color: #333;
            border: none;
            padding: 12px;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }
        .tombol:hover {
            background-color: #e59866;
        }

        .btn-batal {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #777;
            text-decoration: none;
            font-size: 13px;
        }
    </style>
</head>
<body>

<div class='main'>
    <?php
    include("api/pengguna/selectonepengguna.php");
    ?>

    <form action="api/pengguna/updatepengguna.php" method="post">
        <div class="card">
            <p class="judul">Form Edit Pengguna</p>
            
            <input name='nama' class="inputuser" type="text" placeholder="Nama Pengguna" value='<?php echo $datas[0]['nama'] ?>'/>
            <input name='username' class="inputuser" type="text" placeholder="Username" value='<?php echo $datas[0]['username'] ?>'/>
            <input name='password' class="inputuser" type="password" placeholder="Password" value='<?php echo $datas[0]['password'] ?>'/>
            <input name='alamat' class="inputuser" type="text" placeholder="Alamat" value='<?php echo $datas[0]['alamat'] ?>'/>
            <input name='nohp' class="inputuser" type="text" placeholder="Nomor HP" value='<?php echo $datas[0]['nohp']?>'/>
            
            <input hidden name='id' class="inputuser" type="text" placeholder="Nomor Hp" value='<?php echo $datas[0]['id']?>'/>
            
            <button class="tombol">Edit Pengguna</button>
             <a href="pengguna.php" class="btn-batal">Batal</a>
        </div>
    </form>
</div>

</body>
</html>