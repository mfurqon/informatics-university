<?php 
session_start();
if( isset($_SESSION["login"]) ) {
    header("Location: ../index_login.php");
    exit;
}

require 'functions.php';

if ( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if ( mysqli_num_rows($result) === 1 ) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if ( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;
            echo "<script>
                    alert('Anda Berhasil Login');
                    window.location.href='../index_login.php';
                </script>";
            // header("Location: ../index_login.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style_login.css">
    <script src="https://kit.fontawesome.com/30e4c5624e.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-login">
        <div class="form-box">
            <h1>Login</h1>
            <?php if ( isset($error) ) : ?>
                <p style="color: red; font-weight: bold;">Username / Password Salah!</p>
            <?php endif; ?>
            
            <form method="post" action="">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Username" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required>
                    </div>

                    <p>Belum Punya Akun?
                        <a href="sign_up.php">Daftar Akun</a>
                    </p>

                    <div class="btn-field">
                        <button type="submit" name="login">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>