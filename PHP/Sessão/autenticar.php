<?php
    session_start();
    
    
    if (!isset($_POST["login"]) || !isset($_POST["senha"])) {
        header("Location:login.html");
        exit();
    }

   
    if ($_POST["login"] != "admin" || $_POST["senha"] != "123muar") {
        header("Location:login.html");
        exit();
    }

    
    $_SESSION["login"] = "login";

    header("Location:main.php");
    exit();
?>
