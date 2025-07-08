<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #e3eafc, #cfd9f6);
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            padding: 25px 30px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #0b2c61; /* biru tua */
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #0b2c61;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #a3b1d1;
            border-radius: 6px;
            font-size: 14px;
        }

        button {
            margin-top: 20px;
            background-color: #0b2c61; /* biru tua */
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            transition: 0.3s;
        }

        button:hover {
            background-color: #09366e; /* lebih gelap saat hover */
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .success {
            background-color: #edf4ff;
            padding: 15px;
            border-left: 6px solid #0b2c61;
            margin-top: 20px;
            border-radius: 6px;
        }

        .success h3 {
            margin-top: 0;
            color: #0b2c61;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Buku Tamu Digital STITEK Bontang</h1>

    <?php
    $nama = $email = $pesan = "";
    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nama"]) || empty($_POST["email"]) || empty($_POST["pesan"])) {
            $error = "Semua kolom harus diisi!";
        } else {
            $nama = htmlspecialchars($_POST["nama"]);
            $email = htmlspecialchars($_POST["email"]);
            $pesan = htmlspecialchars($_POST["pesan"]);
        }
    }
    ?>

    <form method="POST" action="">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">

        <label for="pesan">Pesan/Komentar:</label>
        <textarea id="pesan" name="pesan" rows="4"><?= isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : '' ?></textarea>

        <button type="submit">Kirim Pesan</button>

        <?php if (!empty($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($error)): ?>
        <div class="success">
            <h3>Pesan Anda berhasil dikirim!</h3>
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Pesan:</strong><br><?= nl2br($pesan) ?></p>
        </div>
    <?php endif; ?>
</div>
</body>
</html>
