<?php
    require 'proses_login.php';

session_start();

if (isset($HTTP_POST_VARS["insert"])) {
    if (($HTTP_POST_VARS["user"] !== "") && ($HTTP_POST_VARS["password"] !== "")) {
        session_register("session_status");
        session_register("session_user");
        session_register("session_password");

        $session_status = "login";
        $session_user = $HTTP_POST_VARS["user"];
        $session_password = $HTTP_POST_VARS["password"];
        header("location: proses_login.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <h2>Penggunaan Session</h2>

    <form action="login.php" method="post">
        <label for="">Username</label>
        <input type="text" name="user" size="15">
        <br>
        <label for="">Password</label>
        <input type="password" name="user" size="15">
        <input type="hidden" name="insert">
        <input type="submit" name="login" value="Login">
    </form>
</body>

