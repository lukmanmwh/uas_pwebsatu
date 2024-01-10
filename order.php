<?php
$servername = "localhost";
$database = "data_saya";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $barang = $_POST['barang'];
    $detail = $_POST['detail'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['no_telp'];
    $order = $_POST['order'];
    $date = $_POST['date'];

    $query = mysqli_query($conn, "INSERT INTO `order` (nama, barang, detail, alamat, no_tlp, pesan, tanggal) VALUES ('$nama', '$barang', '$detail', '$alamat', '$telp', '$order', '$date')");

    if ($query) {
        echo '<script>alert("Pesanan telah diproses."); location.href="belanja.php"</script>';
    } else {
        echo '<script>alert("Pesanan gagal diproses.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="style3.css">
    <title>Order Form</title>
</head>
<body>
    <h2>Order Now</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br>

        <label for="barang">Barang:</label>
        <input type="text" name="barang" required><br>

        <label for="detail">Detail:</label>
        <textarea name="detail" required></textarea><br>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label for="no_telp">No. Telp:</label>
        <input type="text" name="no_telp" required><br>

        <label for="order">Order:</label>
        <input type="text" name="order" required><br>

        <label for="date">Tanggal:</label>
        <input type="date" name="date" required><br>

        <input type="submit" name="submit" value="Submit Order">
    </form>
</body>
</html>
