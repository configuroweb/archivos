<?php
    session_start();
    if($_SESSION['type']!='Normal')
    {
        header('location:../Login/login.php');
        exit();
    }
    include '../connection.php'
?>
