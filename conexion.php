<?php
$mysqli = new mysqli("localhost", "root", "", "eneitbd");

if (mysqli_connect_error()){
    echo 'Conexion Fallida:', mysqli_connect_error();
    exit();

}
//else{
//	echo 'Conexion Exitosa';
//}
?>