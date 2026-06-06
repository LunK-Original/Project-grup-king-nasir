<?php 

include "layanan/database.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/project2/css/login.css">
</head>
<body>
    <div>
        <div class="login_text">
            <h1>Login</h1>
        </div>
        <form action="" method="POST">
            <input type="gmail" name="nama" id="" placeholder="Ketik nama anda" require>
            <div></div>
            <input type="password" name="password" id="" placeholder="Ketik password anda" require>
            <?php 
            
            session_start();

$username = $_POST["nama"] ?? "";
$password = $_POST["password"] ?? "";

$sql = "SELECT * FROM maha WHERE GMAIL = '$username' AND PASS = '$password'";

if(isset($_POST["login"]))
    {

        $_SESSION["username"] = $username;

        if(empty($username) || empty($password))
            {
                echo "<br>Ada yang belum di isi";
            }
            else
            {
                $result = $db->query($sql);

                if($result->num_rows > 0)
                    {
                        header("Location: beranda.php");
                        exit();
                    }
                else
                    {
                        echo "<br>Ada yang salah , password atau username";
                    }
            }
    }
            ?>
            <p>Belum buat akun? <a href="register.php">Buat akun sekarang!</a></p>
            <input type="submit" name="login" id="" placeholder="Ketik nama anda" require>
        </form>
    </div>
</body>
</html>