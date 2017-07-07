<?php
        include 'conexion.php';
        include 'config.inc.php';

        if (isset($_POST['submit'])) {

           $respuestaRadio=$_POST['status'];


           $insertar =  "INSERT INTO  respuesta (status) VALUES ('$respuestaRadio)"; 
           $resu = mysqli_query($conexion, $insertar);
           
           if(!$resu){
            echo 'Error al registrar';
            }else{
            echo 'Registro correctoo';}
          }
?>