<?php include('./funciones.php');  ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos.css">
  </head>
  <body>

<?php
$errores = [];

  session_start();
	  if(isset($_SESSION['secompruebausuario']['usuariocomprobado'])){
	  header("Location:./INDEX PHP DEL DIRECTORIO BROWSER.php");
	  }	else {

	
	  if(!$_POST){
		include('./login.php');
	  } else { 
		include('./validaciones.php');

		if($errores){
		  include('./login.php');
		} else {
		  session_start();
		  $_SESSION['secompruebausuario']['usuariocomprobado'] = $_POST['user'];
		  header("Location:./INDEX PHP DEL DIRECTORIO BROWSER.php");
		}
	  }
  }	

?>



<script src="./static/js/jquery-3.3.1.min.js"></script>
<script src="./static/js/popper.js"></script>
<script src="./static/js/bootstrap.min.js"></script>
  </body>
</html>
