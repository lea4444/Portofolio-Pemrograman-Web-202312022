<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="tambah.php" class="tombol">+ Tambah Produk Baru</a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>u
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM produk");
        $no = 1;
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$row['nama_produk']}</td>
                    <td>Rp " . number_format($row['harga'], 0, ',', '.') . "</td>
                    <td>{$row['stok']}</td>
                    <td>
                        <a href='edit.php?id={$row['id_produk']}' class='edit'>Edit</a>
                        <a href='hapus.php?id={$row['id_produk']}' onclick='return confirm(\"Yakin hapus?\");' class='hapus'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
