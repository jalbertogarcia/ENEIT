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
         	$query = "SELECT * FROM proyecto,proyectoevaluador,usuario where 
            proyecto.id_Proyecto=proyectoevaluador.id_Proyecto  
            and usuario.id_Usuario=proyectoevaluador.id_Usuario 
            and proyectoevaluador.id_Usuario=".$_SESSION['id_usuario'];
         	$resultado = mysql_query($query);

         	while ($fila = mysql_fetch_array($resultado)) {
         		echo "<tr>";
               echo  "<label> $fila[nombrePro] </label>";
               echo "</tr>";	

               echo "<tr>";
               echo "<label>";
               echo  "<a href=$fila[fichaTecnica]> $fila[fichaTecnica] </a>";
               echo "</label>";
               echo "</tr>";

         
               $query1= "SELECT documentacion.Documentacion  FROM proyecto, equipodocumentacion, documentacion 
              where proyecto.id_Equipo = equipodocumentacion.id_Equipo and equipodocumentacion.id_Documentacion
              =documentacion.id_Documentacion and proyecto.id_Proyecto =".$fila['id_Proyecto'];
              $resultadoDocs = mysql_query($query1);

            while ($filaDocs = mysql_fetch_array($resultadoDocs)) {
               echo "<tr>";
               echo "<label>";
               echo  "<a href=$filaDocs[Documentacion]>$filaDocs[Documentacion]</a>";
               echo "</label>";
               echo "</tr>"; 
            } 
         } 

         if ($fila == null){
               echo "<tr>";
               echo "<label>No se le a asignado en ningun Proyecto";
               echo "</label>";
               echo "</tr>";  
            }
   }

 }
 ?>