<?php
        include 'conexion.php';
        include 'config.inc.php';

        if (isset($_POST['submit'])) {
          if(isset($_POST['respuestaRadio']))
          {
           $respuestas=$_POST["respuestaRadio"];
           
           if($respuestas=="Si"){
             action="Contrasena.php";

           }

           $insertar =  "INSERT INTO  respuesta (status) VALUES ('$respuestas')"; 
           $resu = mysqli_query($conexion, $insertar);
           
           if(!$resu){
            echo 'Error al registrar';
            }else{
            echo 'Registro correctoo';}
          }
        }
?>
