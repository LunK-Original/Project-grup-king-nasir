<?php 
$kalimat = "Selamat datang pendatang ..."

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html"?>

    <br>

    <main>
    <h1><?= $kalimat ?></h1>
    </main>

    <br>

    <?php include "layout/footer.html"?>
</body>
</html>