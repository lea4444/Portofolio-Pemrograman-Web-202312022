<?php include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Produk</h1>
    <form method="post">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" required><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" required><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" required><br>

        <button type="submit">Simpan</button>
        <a href="index.php" class="tombol">Kembali</a>
    </form>
</body>
</html>
