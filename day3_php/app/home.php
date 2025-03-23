<?php

    session_start();

    if($_SESSION['login'] != true){
        header("location: login.php");
    }

    header("location:../assets/portfolio/portfolio.php");


?>
