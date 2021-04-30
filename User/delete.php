<?php
include_once '../connection.php';
//$sql1="SELECT Receipt FROM upload WHERE id=".$_REQUEST['data'];
//
//$res1=mysqli_query($con,$sql1) or die(mysqli_error($con));
//$row=mysqli_fetch_assoc($res1);
//unlink($row['photo']);//it will delete the image from the uploaded folder
$sql2="DELETE FROM user WHERE id=".$_REQUEST['data'];
$res2=mysqli_query($con,$sql2) or die(mysqli_error($con));
mysqli_close($con);
if($res2)
{
header("location:../index.php?msg=Datos borrados exitósamente");
}
?> 
