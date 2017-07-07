<?php
include 'conexion.php';
$password1= $_POST ["passwordnuevo"];
$SQL=  "UPDATE usuario SET password1='$password1' WHERE password1=usuario.password1";
//ejecutar consulta
$resultado = mysqli_query ($conexion, $SQL);
if(!$resultado){
	echo 'Error de Contraseña ';
}else{
	echo 'Contraseña guardada';
}