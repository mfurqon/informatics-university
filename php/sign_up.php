<?php 
    require 'functions.php';

    if( isset($_POST["sign_up"]) ) {
        if( signUp($_POST) > 0 ) {
            echo "
            <script>
                alert('Data User berhasil ditambahkan');
                window.location.href='login.php';
            </script>
            ";
        }
        else {
            echo mysqli_error($conn);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="stylesheet" href="../css/style_login.css">
    <script src="https://kit.fontawesome.com/30e4c5624e.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-login">
        <div class="form-box">
            <h1>Daftar Akun</h1>
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
                    
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password" required>
                    </div>

                    <div class="btn-field">
                        <button type="submit" name="sign_up">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>