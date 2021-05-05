<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$sems = $_POST['Semester'];
$IP = $_POST['IP'];

// update data ke database
mysqli_query($conn,"update ipk set Semester='$sems', IP='$IP' where Semester='$sems'");

// mengalihkan halaman kembali ke index.php
header("location:ip.php");

?>