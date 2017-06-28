<?php
$mysqli = new mysqli('localhost','root','','eneitbd');
if ($mysqli->connect_errno):
echo "No se pudo conectar con la base de datos".$mysqli->connect_error;
endif;

$conexion = mysqli_connect('localhost','root','','eneitbd') or die('No se
	pudo conectar con la base de datos'.mysql_error($conexion));




//else{
//	echo 'Conexion Exitosa';
//}

//$mysqli = new mysqli("localhost", "root", "", "eneitbd");

//if (mysqli_connect_error()){
  //  echo 'Conexion Fallida:', mysqli_connect_error();
    //exit();

//}
?>