<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'kontak';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO pesan (nama_lengkap, email, pesan) VALUES ('$nama_lengkap', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Pesan berhasil terkirim!');
            window.location.href = 'index.html'; 
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
