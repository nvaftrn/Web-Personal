<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>
    <form action="" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="umur">Umur:</label><br>
        <input type="number" id="umur" name="umur" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="50" required></textarea><br><br>

        <label for="pekerjaan">Pekerjaan:</label><br>
        <input type="text" id="pekerjaan" name="pekerjaan" required><br><br>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        $nama = htmlspecialchars($_POST['nama']);
        $umur = htmlspecialchars($_POST['umur']);
        $alamat = htmlspecialchars($_POST['alamat']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);

        echo "<h3>Biodata Anda</h3>";
        echo "<p><strong>Nama:</strong> $nama</p>";
        echo "<p><strong>Umur:</strong> $umur</p>";
        echo "<p><strong>Alamat:</strong> $alamat</p>";
        echo "<p><strong>Pekerjaan:</strong> $pekerjaan</p>";
    }
    ?>
</body>
</html>
