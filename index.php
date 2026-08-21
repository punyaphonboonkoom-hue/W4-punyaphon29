<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-box {
            width: 380px;
            background: white;
            padding: 40px;
            border-radius: 15px;
            border-top: 6px solid #d32f2f;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        .main-box h2 {
            color: #d32f2f;
            margin-bottom: 25px;
            font-size: 28px;
        }

        .main-box .user-greeting {
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
        }

        .main-box .user-name {
            font-weight: bold;
            color: #000;
        }

        .main-box .btn-logout {
            display: block;
            width: 100%;
            padding: 12px;
            background: #c33131;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.2s ease;
        }

        .main-box .btn-logout:hover {
            background: #b71c1c;
        }
    </style>
</head>
<body>

    <div class="main-box">
        <h2>หน้าหลัก</h2>
        <div class="user-greeting">
            สวัสดี คุณ<span class="user-name">Sompong</span>
        </div>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

</body>
</html>