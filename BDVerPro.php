<?php
 session_start();
 class conexion{
         function recuperarDatos(){
         	$host="localhost";
         	$user="root";
         	$pw="";
         	$db="eneitbd";

         	$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos");
         	mysql_select_db($db, $con) or die ("No se encontro la base de datos");
         	$query = "SELECT * FROM proyecto,proyectoevaluador, usuario where proyecto.id_Proyecto=proyectoevaluador.id_Proyecto  and usuario.id_Usuario=proyectoevaluador.id_Usuario and proyectoevaluador.id_Usuario=".$_SESSION['id_usuario'];
         	$resultado = mysql_query($query);

         	while ($fila = mysql_fetch_array($resultado)) {
         		echo "<tr>";
               echo  "<label> $fila[nombrePro] </label>";
         		echo "</tr>";		
         	} 
         }
 }
 ?>