<?php
include 'conexion.php';
$nombre = $_POST ["nombre"];
$correo = $_POST["correo"];
$numTelefonico = $_POST["numTelefonico"];

$insert =  "INSERT INTO  usuario (nombre, correo, numTelefonico) VALUES ('$nombre', '$correo', '$numTelefonico')";
//ejecutar consulta
$resultado = mysqli_query ($conexion, $insert);
if(!$resultado){
	echo 'Error al registrar';
}else{
	echo 'Evaluador Registrado';
}
