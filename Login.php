<?php 
 if(isset($_POST["login"])){
    echo "Di tekan";
 }
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

    <form action="" method="POST">
        <input type="email" name="" id="" placeholder="gmail" require>
        <input type="password" name="" id="" placeholder="password" require>
        <button type="submit" name="login">Masuk sekarang</button>
    </form>

    <br>

    <?php include "layout/footer.html"?>
</body>
</html>