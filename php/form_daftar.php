<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

if( isset($_POST["kirim_data"]) ) {
    if( kirimData($_POST) > 0 ) {
        echo "<script>
            alert('Pendaftaran Anda Sedang Diproses');
            window.location.href = '../index_login.php';
        </script>";
    }
    else {
        echo mysqli_error($conn);
    }

    $error = true;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="../css/style_pendaftaran.css">
    <script src="https://kit.fontawesome.com/30e4c5624e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-login">
        <div class="form-box">
            <h1>Form Pendaftaran</h1>
            
            <form method="post" action="">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" name="nama" id="nama" placeholder="Nama" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password" required>
                    </div>
                    <div class="btn-field">
                        <button type="submit" name="kirim_data">Kirim Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>