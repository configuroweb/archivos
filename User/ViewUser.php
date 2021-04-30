
<?php
include_once '../connection.php';
$sql="SELECT * FROM user";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
?>
<html>
<head>
<style type="text/css">
#viewdata table{
    border:1px solid #aaa;
}
#viewdata th{background:#aaa;}
#viewdata td{background:#efefef;}
#viewdata th,td{padding:5px;text-align:left;}
</style>
<table id="viewdata">
<tr>
<th>#</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Teléfono</th>
<th>Correo</th>
<th>Tipo de Usuario</th>
<th colspan=2>Acción</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($res))
{

echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['fname'];
echo "</td><td>";
echo $row['lname'];
echo "</td><td>";
echo $row['phone'];
echo "</td><td>";
echo $row['email'];
echo "</td><td>";
echo $row['type'];
echo "
<td><a href=\"User/delete.php?data=".$row['id']."\">Eliminar</a></td>
</tr>";
}
mysqli_close($con);
?>
</table>
