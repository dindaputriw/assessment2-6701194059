<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "ass2pabweb-6701194059";

    $conn = mysqli_connect($servername, $username, $password, $database);
    // mengecek koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
?>
