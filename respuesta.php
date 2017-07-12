<?php
        session_start();
        $id=$_SESSION['usuario']['id_Usuario'];
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
           if($respuestas=="Si"){

           $insertaAct =  "UPDATE  usuario SET status='Si' WHERE id_Usuario=$id"; 
           $resu = mysqli_query($conexion, $insertaAct);
           header('location: Contrasena.php');
           }
           else{
            $insertaAct =  "UPDATE  usuario SET status='No' WHERE id_Usuario=$id"; 
            $resu = mysqli_query($conexion, $insertaAct);
            header('location: GraciasEvaluador.html');

           }
           
           
        }
      }
?>