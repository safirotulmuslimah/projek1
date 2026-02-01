<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokument</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #889de2, #ec8086);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            background: #fcfbfb;
            padding: 25px 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus {
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.6);
        }

        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #667eea;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        input[type="submit"]:hover {
            background: #5a67d8;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <?php
    // Koneksi ke database
    include 'config.php';
    ?>
    <!-- form inputan -->
    <form action="prosesinput.php" method="post">
        <label>Bulan</label>
        <input type="text" name="bulan">
        <label>Target</label>
        <input type="text" name="target">
        <label>To Do</label>
        <input type="text" name="todo">


        <input type="submit" value="Kirim">
    </form>

</body>


</html>

