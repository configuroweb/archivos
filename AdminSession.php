<?php
    session_start();
    if($_SESSION['type']!='Admin')
    {
        header('location:Login/login.php');
        exit();
    }
    include 'connection.php'
?>
