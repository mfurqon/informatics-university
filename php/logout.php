<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "
    <script>
        alert('Anda Berhasil Logout');
        window.location.href='../index.html';
    </script>
";
?>
