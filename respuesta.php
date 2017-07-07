<?php
        include 'conexion.php';
        include 'config.inc.php';

        if (isset($_POST['submit'])) {

           $respuesta=$_POST['respuestaRadio'];


           $insertar =  "INSERT INTO  respuesta (status) VALUES ('$respuesta)"; 
           $resu = mysqli_query($conexion, $insertar);
           
           if(!$resu){
            echo 'Error al registrar';
            }else{
            echo 'Registro correctoo';}
?>
