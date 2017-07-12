<?php
session_start();
include 'conexion.php';
//$user=$_SESSION['usuario']['id_Usuario'];
$usuario= $_POST ["passwordnuevo"];
$passwordnuevo1 =$_POST["passwordnuevo1"];
$passwordnuevo =$_POST["passwordnuevo"];

$SQL=  "UPDATE usuario SET passwordnuevo1='$passwordnuevo1' WHERE $passwordnuevo1=ususario.passwordnuevo1'";
//ejecutar consulta
$resultado = mysqli_query ($conexion, $SQL);
if(!$resultado){
	echo 'Error de Contraseña ';
}else{
	echo 'Contraseña guardada';
}?>
