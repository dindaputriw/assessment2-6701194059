<?php 
    include 'koneksi.php';
    $ip = mysqli_query($conn, 'SELECT * FROM ipk');
?>

<!DOCTYPE html>
<html>
	<head>
	<center>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
	integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<title>Assesment 1</title>
	</head>
	<body align = "center">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="about.php">ABOUT</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="ip.php">IPK<span class="sr-only"></a>
				  </li>
                  </li>
				  <li class="nav-item">
					<a class="nav-link" href="index.php">LOGIN</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="registrasi.php">REGISTRASI</a>
				  </li>
				</ul>
			<span class="navbar-text">
			 DINDA PUTRI WIDYADHARI
			</span>
		  </div>
		</nav>
        <div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:80%; height:475px;">
            <font color="orange" size="3" align="center">DATA IP</font>
            <table width="50%" border="1" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#FF6600" align="center">
                    <th width="20">No</td> 
                    <th width="50" height="42">Semester</td> 
                    <th width="50">IP</td>    
                    <th width="50">Action</td>
                </tr>

                <?php if(mysqli_num_rows($ip)>0){ ?>
            <?php
                $no = 1;
                while($data = mysqli_fetch_array($ip)){
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data["Semester"];?></td>
                <td><?php echo $data["IP"];?></td>
                <td>
                    <a href="hapus.php?Semester=<?php echo $data['Semester']; ?>">Hapus</a> | 
                    <a href="edit.php?Semester=<?php echo $data['Semester']; ?>">Edit</a>
                </td>
            </tr>
            <?php $no++; } ?>
            <?php } ?>

            </table>
            <a href="tambah.php">Tambah Data </a> 
             
	</body>
</html>
