<?php 

session_start();

$tamu = $_POST['nama'] ?? "tamu";

$tamu = $_SESSION['username'];

if(isset($_POST["log_out"]))
    {
        session_destroy();
        header("Location: login.php");
        exit();
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
    <form action="" method="POST">
        <h1>halo selamat datang <?=  $tamu ?></h1>
        <button type="submit" name="log_out">Log out</button>
    </form>
</body>
</html>