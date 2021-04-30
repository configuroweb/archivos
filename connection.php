<?php
date_default_timezone_set("America/Bogota");
$con= mysqli_connect("localhost","root","");
if($con)
{
    mysqli_select_db($con,"documentos");
}
 else {
     echo "could not connect to the database".die(mysqli_error($con));
}
?>
