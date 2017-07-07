<?php
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
            $id_Usuario=$_POST['id_Usuario'];
            $id_Proyecto=$_POST['id_Proyecto'];
            $id_Hoja=$_POST['id_Hoja'];

            $sql="INSERT INTO evaluacion VALUES('','$calificacion','$id_Usuario','id_Proyecto','id_Hoja')";
            $ejecutar=mysql_query($sql);
            if(!$ejecutar){
               echo "Hubo Algun Error";
            }else{
               echo "Datos Guardados Correctamente<br><a href='AplicacioesMovilesRubrica.php'>Volver</a>";
            }
         
 
 ?>