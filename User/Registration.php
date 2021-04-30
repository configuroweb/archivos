
<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
<h2 style="text-align: center;">Formulario de Registro de Usuario</h2>
<form name="Myform" id="Myform" action="User/RegisterProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        <thead></thead>
        <tbody>
            <tr>
                <td>Nombre</td>
                <td><input type="text" name="fname" id="fname" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Apellido</td>
                <td><input type="text" name="lname" id="lname" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Número</td>
                <td><input type="text" name="mobile" id="mobile" maxlength="10" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Correo Electrónico</td>
                <td><input type="text" name="email" id="email" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Tipo de Usuario</td>
                <td>
                    <select name="usertype" id="usertype" onkeydown="HideError()">
                        <option value="user" selected>Selecciona el tipo de Usuario</option>
                        <option value="Normal">Normal</option>
                        <option value="Admin" >Admin</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Agregar" /></td>
            </tr>
        
        </tbody>
    </table>
</form>

