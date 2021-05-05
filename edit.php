<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<br/>
	<a href="ip.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA IP</h3>

	<?php
	include 'koneksi.php';
	$Semester = $_GET['Semester'];
	$data = mysqli_query($conn,"select * from ipk where Semester='$Semester'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Semester</td>
					<td>
						<input type="text" name="Semester" value="<?php echo $d['Semester']; ?>">
					</td>
				</tr>
				<tr>
					<td>IP</td>
					<td><input type="text" name="IP" value="<?php echo $d['IP']; ?>"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>