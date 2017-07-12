<?php
        session_start();
        include 'conexion.php';
        include 'config.inc.php';
        /*$SQL=  "SELECT * FROM `usuario` WHERE `status` is NULL";
          $resultado = mysqli_query ($conexion, $SQL);
        if(!$resultado){
            
            echo 'Error de Consulta ';}
            else{
                  echo 'OK';
                  header('location: evaluador.php');}
          }*/

        if (isset($_POST['submit'])) {

          if(isset($_POST['respuestaRadio']))
          {
           $respuestas=$_POST["respuestaRadio"];

           $insertaAct =  "INSERT INTO  respuesta (status) VALUES ('$respuestas')"; 
           $resu = mysqli_query($conexion, $insertaAct);
           if("$respuestas"=="Si"){

            header('location: Contrasena.php');
          }
           else{
            header('location: GraciasEvaluador.html');

           }
           
           if(!$resu){
            echo 'Error al registrar';
            }else{
            echo 'Registro correctoo';}
          }
        }
?>