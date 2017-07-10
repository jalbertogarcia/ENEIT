<?php
 class conexion{
         function recuperarDatos(){
         	$host="localhost";
         	$user="root";
         	$pw="";
         	$db="eneitbd";

         	$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos");
         	mysql_select_db($db, $con) or die ("No se encontro la base de datos");
         	$query = "SELECT * FROM proyecto";
         	$resultado = mysql_query($query);
            echo "<select name='id_proyecto'>";
            echo "<option value='seleciona'>--Seleciona Proyecto--</option>";
         	while ($fila = mysql_fetch_array($resultado)) {
         		
               echo "<option value='id_proyecto' id='id_proyecto' name='id_Proyecto'>$fila[id_Proyecto].-$fila[nombrePro]</option>";
         		
         	}
            echo "</select>"; 
         }
 }
 ?>