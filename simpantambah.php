<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$Semester=$_POST["Semester"];
$IP=$_POST["IP"];


//Query input menginput data kedalam tabel barang
  $sql="insert into ipk (Semester,IP) values
		('$Semester','$IP')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);
  
//Kondisi apakah berhasil atau tidak
if ($hasil) {
	echo '<script>
    alert("Tambah Data Telah Berhasil!");
    window.location.href="ip.php"
    </script>
    ';
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  
?>