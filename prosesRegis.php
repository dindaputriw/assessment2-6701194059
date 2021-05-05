<?php
$Nama = $_POST['Nama'];
$Email = $_POST['email'];
$Password = $_POST['pass'];
$Password1 = $_POST['pass1'];

if ($Password == $Password1) {
    echo "
        <script>
        alert('Berhasil Login');
        document.location.href = 'index.php';
        </script>";
} elseif ($Password != $Password1) {
    echo "
        <script>
        alert('Password tidak sama');
        document.location.href = 'registrasi.php';
        </script>";
}