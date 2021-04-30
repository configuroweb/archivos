<?php
        include_once '../connection.php';
    if(isset($_POST['submit'])){
        $fname = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['fname'])));
        $lname = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['lname'])));
        $phone = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['mobile'])));
        $email = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['email'])));
        $Usertype = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['usertype'])));
        
        $insertqry = mysqli_query($con,"Insert into user (fname,lname,phone,email,password,type) values('$fname','$lname','$phone','$email','$lname','$Usertype')") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:Success.php');
        }
    }
?>
