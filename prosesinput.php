<!-- get data dari form -->
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bulan = $_POST['bulan'];
    $target = $_POST['target'];
    $todo = $_POST['todo'];

    // insert data ke database
    $sql = "INSERT INTO tbtarget (bulan, target, todo) VALUES ('$bulan', '$target', '$todo')";
    $result = mysqli_query($koneksi, $sql);

    // Tutup koneksi
    mysqli_close($koneksi);

    // Redirect ke halaman index.php
    header("Location: view-data.php");
    exit();
}
?>