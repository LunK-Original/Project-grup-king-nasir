<?php 
session_start();

if(isset($_SESSION["username"]))
    {
        header("Location: beranda.php");
        exit();
    }
    else
    {
        echo "anak";
        header("Location: login.php");
        exit();
    }


?>