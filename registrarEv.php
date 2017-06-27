<?php
include 'conexion.php';
$nombre = $_POST ["nombre"];
$correo = $_POST["correo"];
$numTelefonico = $_POST["numTelefonico"];
$especialidad = $_POST["especialidad"];
$titulo = $_POST["titulo"];
$institucion = $_["institucion"];
$insert =  "INSERT INTO  usuario (nombre, correo, numTelefonico, especialidad, titulo, institucion) VALUES ('$nombre', '$correo', '$numTelefonico', '$especialidad', '$titulo', '$institucion')";
//ejecutar consulta
$resultado = mysqli_query ($conexion, $insert);
if(!$resultado){
	echo 'Error al registrar';
}else{
	echo 'Evaluador Registrado';
}
