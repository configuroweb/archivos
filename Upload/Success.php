<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Docs | Success</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;">DFS | <span style="color:green">Message</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Success</h1>
    <h2 style="color: green">Has subido correctamente tu archivo</h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy;ConfiguroWeb
</div>
</div>
</body>
</html>
<?php
$path = ($_SESSION['type'] == 'Admin') ? "../" : "../Normal/";
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>