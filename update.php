<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokument</title>

    <!-- CSS LANGSUNG DI SINI -->
    <style>
        * {
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 14px;
            width: 360px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: 600;
            color: #444;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #667eea;
            box-shadow: 0 0 6px rgba(102, 126, 234, 0.6);
        }

        input[type="submit"] {
            margin-top: 22px;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
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

        button {
            margin-top: 10px;
            width: 100%;
            padding: 9px;
            border: none;
            border-radius: 10px;
            background: #e2e8f0;
            color: #333;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #cbd5e1;
        }
    </style>
</head>

<body>

    <?php
    include 'config.php';

    $id = $_GET['id'];

    // ambil data lama
    $sql = mysqli_query($koneksi, "SELECT * FROM tbtarget WHERE id='$id'");
    $siswa = mysqli_fetch_assoc($sql);

    // proses update
    if (isset($_POST['update'])) {
        $bulan = $_POST['bulan'];
        $target = $_POST['target'];
        $todo = $_POST['todo'];

        mysqli_query($koneksi, "UPDATE tbtarget 
        SET bulan='$bulan', target='$target', todo='$todo' 
        WHERE id='$id'");

        header("Location: view-data.php");
        exit;
    }
    ?>

    <div class="container">
        <h2>Update Data Target</h2>

        <form method="post">
            <label>Bulan</label>
            <input type="text" name="bulan" value="<?= htmlspecialchars($siswa['Bulan']); ?>" required>

            <label>Target</label>
            <input type="text" name="target" value="<?= htmlspecialchars($siswa['Target']); ?>" required>

            <label>To Do</label>
            <input type="text" name="todo" value="<?= htmlspecialchars($siswa['ToDo']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <a href="view-data.php"><button>Kembali</button></a>
    </div>

</body>

</html>
