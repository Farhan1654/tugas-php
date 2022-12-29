<?php 

session_start();

if(isset($HTTP_SESSION_VARS["session_status"])) {
    echo "Username : <b>".$HTTP_SESSION_VARS["session_user"]."</b> <br>";
    echo "Password : <b>".$HTTP_SESSION_VARS["session_password"]."</b> <br>";
    echo "Click <a href=\'logout.php'\>Logout</a> untuk kembali" ;

} else {
    header("location: login.php");
    exit;
}




?>