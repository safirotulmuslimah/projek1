<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dokument</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #889de2, #ec8086);
            padding: 30px;
        }

        .container {
            max-width: 900px;
            margin: auto;
            margin-bottom: 20px;
        }

        button {
            padding: 8px 15px;
            border: none;
            border-radius: 8px;
            background: #ffffff;
            color: #333;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #f1f1f1;
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        thead {
            background: #667eea;
            color: white;
        }

        th {
            padding: 12px 15px;
            text-align: center; /* judul kolom di tengah */
        }

        td {
            padding: 12px 15px;
            text-align: left;
        }

        tr:nth-child(even) {
            background: #f4f6ff;
        }

        tr:hover {
            background: #e8ebff;
        }

        td:last-child {
            text-align: center; /* kolom aksi ke tengah */
        }

        a {
            text-decoration: none;
            font-weight: 600;
            margin: 0 6px;
        }

        a[href*="hapus"] {
            color: #e53e3e;
        }

        a[href*="update"] {
            color: #3182ce;
        }

        p {
            color: white;
            text-align: center;
            font-size: 18px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<?php
include 'config.php';

// ambil data
$sql = "SELECT * FROM tbtarget";
$result = mysqli_query($koneksi, $sql);
?>

<div class="container">
    <a href="index.php"><button>kembali</button></a>
</div>

<?php if (mysqli_num_rows($result) > 0): ?>
<div class="container">
    <table>
        <thead>
            <tr>
                <th>bulan</th>
                <th>target</th>
                <th>to do</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= htmlspecialchars($row['Bulan']); ?></td>
                <td><?= htmlspecialchars($row['Target']); ?></td>
                <td><?= htmlspecialchars($row['ToDo']); ?></td>
                <td>
                    <a href="hapus.php?id=<?= urlencode($row['id']); ?>">hapus</a>
                    |
                    <a href="update.php?id=<?= urlencode($row['id']); ?>">edit</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<?php else: ?>
<p>data tidak ditemukan</p>
<?php endif; ?>

</body>
</html>
