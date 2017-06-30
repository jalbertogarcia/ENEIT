<?php
 class conexion{
         function recuperarDatos(){
         	$host="localhost";
         	$user="root";
         	$pw="";
         	$db="eneitbd";

         	$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos");
         	mysql_select_db($db, $con) or die ("No se encontro la base de datos");
         	$query = "SELECT * FROM usuario";
         	$resultado = mysql_query($query);

         	while ($fila = mysql_fetch_array($resultado)) {
         		echo "<tr>";
               echo "<br><input type='checkbox' name='correos[]' value=$fila[correo] class='filled-in'/><label>$fila[nombre]--</label>";
               echo  "<label> $fila[correo] </label>";
         		echo "</tr>";		
         	} 
         }
 }
 ?>