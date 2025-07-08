<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "db_toko";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
