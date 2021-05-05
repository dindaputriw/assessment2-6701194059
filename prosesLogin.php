<?php
$email = $_POST['email'];
$password = $_POST['password'];

echo "
        <script>
        alert('Berhasil Login');
        document.location.href = 'about.php';
        </script>";