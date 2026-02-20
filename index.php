<?php
// Baca credentials dari .env
$env = parse_ini_file('/var/www/html/.env');

$conn = mysqli_connect(
    $env['DB_HOST'],
    $env['DB_USER'],
    $env['DB_PASS'],
    $env['DB_NAME']
);

if (!$conn) {
    die("Koneksi gagal!");
}

echo "<h1>Halo, Saya Andreas-df!</h1>";
echo "<p>Koneksi ke database <strong>berhasil!</strong></p>";
?>
