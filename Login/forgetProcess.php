<?php 
    
        include_once '../connection.php';
    if(isset($_POST['submit'])){
        
        $phone = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['mobile'])));
        $email = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['fname'])));
        $password = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['password'])));
        
        
        $insertqry = mysqli_query($con,"Update user set password = '$password' where phone = '$phone' AND email = '$email'") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:Success.php');
        }
    }
?>