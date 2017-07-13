<?php
session_start();
$id=$_SESSION['id_Usuario'];
include 'conexion.php';
if(!empty($_POST['Contrasena'])){
				$Contrasena=$_POST['Contrasena'];
				$passwordnuevo=$_POST['passwordnuevo'];
				$passwordnuevo1=$_POST['passwordnuevo1'];

if($passwordnuevo==$passwordnuevo1){

$SQL=mysql_query("SELECT * FROM usuario WHERE id_Usuario=$id"); 

    while($tarea=mysql_fetch_array($SQL)){
					
					mysql_query("UPDATE usuario SET Contrasena='$passwordnuevo' WHERE password1='id_Usuario'");

//$SQL=  "UPDATE usuario SET password1=$passwordnuevo1 WHERE $passwordnuevo1=ususario.password1";
//ejecutar consulta
			//echo mensajes('Contraseña Cambiada Con Exito','verde');
			}
		} 
}
?>