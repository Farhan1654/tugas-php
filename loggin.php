<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemprosesan file</title>
</head>
<body>
    <?php
    session_start();
    if(isset ($http_post_vars["insert"]))
    {
        if(($http_post_vars["user"]!="")&& ($http_post_vars["password"]!=""))
        {
            session_register("session_satatus");
            session_register("session_user");
            session_register("password");
            $session_status="login"
        }
       

    }
</body>
</html>