<?php 

include "layanan/database.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div>
    <div class="register_text">
        <h1>Register</h1>
    </div>
    <form action="" method="POST">
        <input type="gmail" name="nama" id="" placeholder="Ketik nama anda" require>
        <div></div>
        <input type="password" name="password" id="" placeholder="Ketik password anda" require>
        <?php 
        
$username = $_POST["nama"] ?? "";
$password = $_POST["password"] ?? "";

$sql = "INSERT INTO user(gmail_pengguna , passwords) VALUES('$username' , '$password')";

if(isset($_POST["login"]))
    {
        if(empty($username) || empty($password))
            {
                echo "<br>Ada yang belum di isi";
            }
            else
            {
                if($db->query($sql))
                    {
                        echo "<br>data telah masuk";
                        header("Location: login.php");
                        exit();
                    }
                else
                    {
                        echo "<br>terjadi kesalahan";
                       
                    }
            }
    }
        ?>
        <p>Sudah punya akun? <a href="login.php">Masuk sekarang!</a></p>
        <input type="submit" name="login" id="" placeholder="Ketik nama anda" require>
    </form>
    </div>
</body>
</html>