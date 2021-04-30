<?php
    include_once '../connection.php';
    $id = $_REQUEST['data'];
    $qry = mysqli_query($con,"Select * from user where id='$id'") or die(mysqli_error($con));
    while($row = mysqli_fetch_array($qry)){
        $id = $row['id'];
        $fname=$row['fname'];
        $lname =$row['lname'];
        $phone = $row['phone'];
        $email = $row['email'];
        
        
    }
?>
<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
<h2 style="text-align: center;">Formulario de Registro de Usuarios</h2>
<form name="Myform" id="Myform" action="EditProcess.php?id='<?php echo $id;?>'" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        <thead></thead>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="fname" id="fname" onkeydown="HideError()" value = "<?php echo $fname?>"/></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="lname" id="lname" onkeydown="HideError()" value = "<?php echo $lname?>"/></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><input type="text" name="mobile" id="mobile" onkeydown="HideError()" value = "<?php echo $phone?>"/></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><input type="text" name="email" id="email" onkeydown="HideError()" value = "<?php echo $email?>"/></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" name="password" id="password" onkeydown="HideError()" /></td>
            </tr>
            
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Actualizar" /></td>
            </tr>
        
        </tbody>
    </table>
</form>

