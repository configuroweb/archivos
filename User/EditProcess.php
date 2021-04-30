<?php 
    
        include_once '../connection.php';
    if(isset($_POST['submit'])){
        $fname = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['fname'])));
        $lname = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['lname'])));
        $phone = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['mobile'])));
        $email = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['email'])));
        $Usertype = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['usertype'])));
        
        $id = $_REQUEST['id'];
        
        $insertqry = mysqli_query($con,"Update user set fname = '$fname',lname = '$lname', phone = '$phone',email = '$email' type='$Usertype' where id = $id") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:../index.php');
        }
    }
?>
