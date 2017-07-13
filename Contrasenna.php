<?php
session_start();
$id=$_SESSION['usuario']['id_Usuario'];
include 'conexion.php';
include 'config.inc.php';
if(!empty($_POST['Contrasena'])){
				$Contrasena=$_POST['Contrasena'];
				$passwordnuevo=$_POST['passwordnuevo'];
				$passwordnuevo1=$_POST['passwordnuevo1'];

if($passwordnuevo==$passwordnuevo1){

//$SQL=mysql_query("SELECT * FROM usuario WHERE id_Usuario=$id"); 

    //while($tarea=mysql_fetch_array($SQL)){
					
					$ej="UPDATE usuario SET password1 = '$passwordnuevo' WHERE id_Usuario='$id'";
					$resu = mysqli_query($conexion, $ej);

					if(!$resu){
  					echo 'Error al cambiar contraseña';
					}else{
					  echo 'Cambio de contraseña exitoso';
					}

//$SQL=  "UPDATE usuario SET password1=$passwordnuevo1 WHERE $passwordnuevo1=ususario.password1";
//ejecutar consulta
			//echo mensajes('Contraseña Cambiada Con Exito','verde');
			}
		//} 
}
?>