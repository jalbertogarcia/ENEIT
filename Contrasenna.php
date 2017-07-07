<?php
session_start();
include 'conexion.php';
//$user=$_SESSION['usuario']['id_Usuario'];
$password1= $_POST ["passwordnuevo"];
$correo =$_POST["correo"];
$SQL=  "UPDATE usuario SET password1='$password1' WHERE '$correo'=usuario.correo";
//ejecutar consulta
$resultado = mysqli_query ($conexion, $SQL);
if(!$resultado){
	echo 'Error de Contraseña ';
}else{
	echo 'Contraseña guardada';
}?>