<?php
$host = 'localhost';
$user = 'aren';
$pass = '123';
$db   = 'webku';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo "<h1>Halo,Saya Andreas!</h1>";
echo "<p>Koneksi ke database <strong>berhasil!</strong></p>";
?>
