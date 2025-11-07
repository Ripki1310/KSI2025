<?php
$host = "localhost";
$user = "root";      
$pass = "";          
$db   = "ksi2025";   
$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi ke database berhasil!";
}
?>
