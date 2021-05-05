<?php 
	include 'koneksi.php';
	if (isset($_GET['Semester'])) {
		$Semester = $_GET['Semester'];
		$sql 	= "DELETE FROM `ipk` WHERE `ipk`.`Semester` = '$Semester'";
		$result = mysqli_query($conn, $sql);

		if ($result) {
			echo '
            <script>
            alert("Daftar IPK berhasil dihapus!");
            window.location.href="ip.php"
            </script>
            ';
		}else{
			echo '
            <script>
            alert("Daftar IPK gagal dihapus!");
            window.location.href="ip.php"
            </script>
            ';
		}
	}

 ?>