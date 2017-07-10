<?php
session_start();

$conectar =@mysql_connect('localhost','root','');
if (!$conectar) {
   echo "No se pudo conectar con el servidor";
}else{
   $base=mysql_select_db('eneitbd');
   if(!$base){
      echo "No se encontro la base de datos";
   }
}
            $calificacion=$_POST['calificacion'];
            $id_usuario=$_SESSION['usuario']['id_usuario'];
         //   $id_proyecto = $_POST["id_proyecto"];


            $sql="INSERT INTO evaluacion VALUES('','$calificacion','$id_usuario','1','3')";
            $ejecutar=mysql_query($sql);
            if(!$ejecutar){
               echo "Hubo Algun Error";
            }else{
               echo "Datos Guardados Correctamente<br><a href='Producto.php'>Volver</a>";
            }
         
 
 ?>