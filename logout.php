<?php
    session_start();
        unset($_SESSION['username']);
        unset($_SESSION['login']);
    session_destroy();
    header("location:index.php"); //code untuk lokasi dimana setelah logout
?>