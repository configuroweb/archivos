<?php
    include_once 'NormalSession.php';
    
    $uname = $_SESSION['email'];
    $password = $_SESSION['password'];
    $chekUser = mysqli_query($con,"Select * from user where email= '$uname' AND password = '$password'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($chekUser);
    $fname = $row['fname'];
    $lname = $row['lname'];
    
    $username = $fname . " ".$lname;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Docs | Página de Inicio</title>
        <link rel="stylesheet" href="../css/index.css">
        <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../js/Registration.js"></script>
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
                    <h1 style="text-align: center;color: green;"><span><img src="../image/logocw.png" alt="logo"/></span>ConfiguroWeb</h1>  
                </div>
                </div>
            <div id="menu">
                <ul>
                <li><a href="#" onclick="getPage('ViewUser.php')">Mi Perfil</a></li>
                <li><a href="#">Administración de Archivos</a>
                <ul>
                <li><a href="#" onclick="getPage('../Upload/Upload.php')">Agregar Nuevo Archivo</a></li>
                <li><a href="#" onclick="getPage('../View/View.php')">Ver Todos los Archivos</a></li>
                <!--<li><a href="#">Edit file</a></li>-->
                </ul>
                </li> 
                <li><a href="../logout.php">Cerrar Sesión</a></li>
                <li style="margin-top: 5px;margin-left: 22em;">Has ingresado como : <?php echo $username?></li>
                </ul>
            </div>
            <div id="main">
            <div id="content">
            <h1>Bienvenido a tu Sistema de Gestión de Archivos</h1>
            <ul style="margin-left: 5em; margin-top: 2em;">
                <li>Subir archivos al sistema</li>
                <li>Descarga tus archivos dondequiera que estés</li>
                <li>Edite sus archivos personales</li>
                <li>Registrar nuevo usuario</li>
                <li>Editar usuarios registrados</li>
            </ul>
            </div>
            <div id="side">
            <h3>Dashboard</h3>
            <table style="border: 1px black solid;background-color: #607B8B;">
                <tr>
                    <td><li><a href="#" onclick="getPage('../Upload/Upload.php')">Agregar Nuevo Archivo</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('../View/View.php')">Ver archivo</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('ViewUser.php')">Mi Perfil</a></li></td>
                </tr>
<!--                <tr>
                    <td><li><a href="#" onclick="getPage('Edit.php')">Change Password</a></li></td>
                </tr>-->
                

            </table>
            </div>
            <!-- this clear class is for special purpose.
            this is for to clear the "float property" of 
            the previous element, it will prevent footer
            to float -->
            <div class= "clear"></div>
            </div>
            <div id="footer">
            &copy; ConfiguroWeb
            </div>
        </div>
    </body>
</html>
