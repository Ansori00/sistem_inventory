<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pratikum1"; // Pastikan nama ini sudah sesuai

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}