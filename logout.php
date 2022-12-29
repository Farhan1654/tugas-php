<?php 
    session_start();
    session_destroy();
    echo "Logout selesai";
    echo "Kembali ke halaman login klik <a href=\'login.php'\>Login</a>";
?>