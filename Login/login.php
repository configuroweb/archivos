<!DOCTYPE html>
<html>
<head>
<title>Docs | Login</title>
<link rel="stylesheet" href="../css/login.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }

        </script>
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">Gestor de Archivos | <span style="color:green">Ingresar</span></h1>  
</div>
</div>

<div id="content">
    <form name="Myform" id="Myform" action="loginProcess.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 20px">Correo</td>
                <td style="font-size: 20px"><input type="text" name="uname" id="fname" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">Contraseña</td>
                <td style="font-size: 20px"><input type="password" name="password" id="password" onkeydown="HideError()" size="20px;"/></td>
            </tr>
            
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Ingresar" /></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td style="color:green;"><a href="#" onclick="getPage('forgetPassword.php')">Olvide mi contraseña..!</a></td>
            </tr>
        
        </tbody>
    </table>
</form>

</div>

<div class= "clear"></div>

<div id="footer">
Para mas desarrollos accede a <a href="https://www.configuroweb.com/desarrollo/"> ConfiguroWeb</a>
</div>
</div>
</body>
</html>
