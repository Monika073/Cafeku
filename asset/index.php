<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 300px;
        }
        .login-box h2 {
            margin-top: 0;
            color: #333333;
            font-size: 20px;
            margin-bottom: 20px;
            text-align: center;
        }
        .input-group {
            margin-bottom: 15px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn-login {
            width: 100%;
            padding: 10px;
            background-color: #4a90e2;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn-login:hover {
            background-color: #357abd;
        }
    </style>

</head>
<body>
    <from action='api/pengguna/ceklogin.php' method='POST'>
        <input name='username' type="text" placeholder='Username'>
        <br>
        <input name='password type="password" placeholder='Password'>
        <br>
        <button>Login </button>

    </from>
    
</body>
</html>
