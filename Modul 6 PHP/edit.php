<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = $id");
$data = mysqli_fetch_assoc($query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $update = "UPDATE produk SET nama_produk='$nama', harga='$harga', stok='$stok' WHERE id_produk=$id";
    mysqli_query($conn, $update);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="post">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" required><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br>

        <button type="submit">Update</button>
        <a href="index.php" class="tombol">Batal</a>
    </form>
</body>
</html>
