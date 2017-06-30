<?php
 class conexion{
         function recuperarDatos(){
         	$host="localhost";
         	$user="root";
         	$pw="";
         	$db="eneitbd";

         	$con = mysqli_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos");
         	mysqli_select_db($db, $con) or die ("No se encontro la base de datos");
         	$query = "SELECT * FROM usuario";
         	$resultado = mysqli_query($query);

         	while ($fila = mysqli_fetch_array($resultado)) {
         		echo "<tr>";
         		echo "<td> $fila[nombre] </td> <td>$fila[correo] </td><br>" ;
         		echo "</tr>";
         		
         	} 
         }
 }
 ?>