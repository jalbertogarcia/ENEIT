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
              $query= "SELECT * FROM  equipo, equipodocumentacion, documentacion where equipo.id_equipo=equipodocumentacion.id_equipo and documentacion.id_Documentacion=equipodocumentacion.id_Documentacion and equipodocumentacion.id_equipo".$_SESSION['id_Documentacion'];
              $resultado = mysql_query($query);

         	while ($fila = mysql_fetch_array($resultado)) {
         		echo "<tr>";
               echo  "<a>$fila[Documentacion]</a>";
         		echo "</tr>";		
         	} 
         }
 }
 ?>