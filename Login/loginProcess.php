<?php
    if(isset($_POST['submit'])){
        
        session_start();
        ob_start();
        include '../connection.php';
        
        
        $uname = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['uname'])));
        $password = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['password'])));
        
        $userqry = mysqli_query($con,"select * from user where email = '$uname' AND password = '$password'") or die(mysqli_error($con));
        $countUser = mysqli_num_rows($userqry);
        if($countUser == 1)
        {
           $row = mysqli_fetch_array($userqry);
           $_SESSION['email'] = $row['email'];
           $_SESSION['password'] = $row['password'];
           $_SESSION['type'] = $row['type'];
           
           if($_SESSION['type'] == 'Admin'){
               header('location:../index.php'); 
           }
           elseif ($_SESSION['type'] == 'Normal') {
               header('location:../Normal/index.php');
       }
        }
 else {
            header('location:../ErrorMesage.php');
 }
 
 ob_end_flush();       
    }
?>
