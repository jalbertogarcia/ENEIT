<?php
include 'conexion.php'; 
session_start();

  if (isset($_SESSION['usuario'])) {
  	if ($_SESSION['usuario']['tipo']=="Coordinador") {
  		header('location: Coordinador.php');
  	}else if($_SESSION['usuario']['tipo']=="Evaluador"){
      $SQL=  "SELECT * FROM `usuario` WHERE `status` is NULL";
      $resultado = mysqli_query ($conexion, $SQL);

        if(!$resultado){
            header('location: evaluador.php');
            
            }else{
<<<<<<< HEAD
                  echo 'OK';
                  header('Location: RespuestaEvaluador.html');
=======
                  header('Location: RespuestaEvaluador.html');

>>>>>>> 10443f7ec4466b3388b246bf158c7c2de4223ca2
            }
        
  	}

    
//ejecutar consulta


  	
  }

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title> Iniciar Sesion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
   <link rel="stylesheet" href="css/estilos1.css">
</head>
<body>
<div class="error">
	<span> Datos de ingreso no válidos, comprobar por favor</span>
</div>
<div class="main">
<form action="" id="formlg">
	<h2>Iniciar sesion</h2>
	<input type="text" placeholder="&#128273; Correo" name="usuariolg" required pattern="[A-Za-z0-9_\-@\.]{1,50}"/>
	<input type="password" placeholder="&#128272; Contraseña" name="passlg" required pattern="[A-Za-z0-9_\-@\.]{1,50}"/>
	<input type="submit" class="botonlg" value="Iniciar Sesión" />
</form>
 </div>
 <script src="js/jquery-3.1.1.min.js"></script>
 <script src="main.js"></script>
</body>
</html>
