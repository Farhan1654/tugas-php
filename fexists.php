<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penggunaan Modularisasi</title>
</head>
<body>
    <H2>Pemeriksaan File</H2>
    <?php
    $file='c:\\Teks.txt';
    if(file_exists($file))
    {
        echo("file <b> $file </b> sudah ada !");
    }else
    {
        echo("file <b> $file </b> tidak ada !");
    }
    ?>
</body>
</html>