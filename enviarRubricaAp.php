<?php
 class conexion{
         function recuperarDatos(){
         	$host="localhost";
         	$user="root";
         	$pw="";
         	$db="eneitbd";

         	$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos");
         	mysql_select_db($db, $con) or die ("No se encontro la base de datos");
            $calificacion=$_POST['calificacion'];
            $id_Usuario=$_POST['id_Usuario'];
            $id_Proyecto=$_POST['id_Proyecto'];
            $id_Hoja=$_POST['id_Hoja'];
            $sql= "INSERT INTO evaluacion VALUES ('','$calificacion','$id_Usuario','id_Proyecto','id_Hoja')"
            $ejecutar= mysql_query($sql);
            if(!$ejecutar){
               echo="Hubo Algun Error";
            }else{
               echo "Datos Guardados Correctamente<br><a href'AplicacioesMovilesRubrica.php'>Volver</a>;
            }
         }
 }
 ?>