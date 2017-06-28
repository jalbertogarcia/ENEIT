<?php
include 'conexion.php';

  $nombrePro = $_POST["nombrePro"];
  $categoria=$_POST["categoria"];
  $fichaTecnica=$_POST["fichaTecnica"];
 $nombreInt=$_POST["nombreInt"];
  $ApellidoPaternoInt=$_POST["ApellidoPaternoInt"];
  $ApellidoMaternoInt=$_POST["ApellidoMaternoInt"];
  $NombreAs=$_POST["NombreAs"];
  $ApellidoPaternoAS=$_POST["ApellidoPaternoAS"];
  $ApellidoMaternoAS=$_POST["ApellidoMaternoAS"];
  




  $insertar =  "INSERT INTO  proyecto (nombrePro,categoria,fichaTecnica) VALUES ('$nombrePro', '$categoria', '$fichaTecnica')"; 
   $resu = mysqli_query($conexion, $insertar);
  
 
  $inserttres =  "INSERT INTO asesor(NombreAs,ApellidoPaternoAS,ApellidoMaternoAS) VALUES ('$NombreAs', '$ApellidoPaternoAS', '$ApellidoMaternoAS')"; 
  $resultadoses = mysqli_query ($conexion, $inserttres);






  $insertdos = "INSERT INTO integrantes (nombreInt,ApellidoPaternoInt,ApellidoMaternoInt) VALUES ('$nombreInt', '$ApellidoPaternoInt', '$ApellidoMaternoInt')";
  $resultado = mysqli_query ($conexion, $insertdos);

   

  



if(!$resultado&!$resultadoses&!$resu){
  echo 'Error al registrar';
}else{
  echo 'Registro correctoo';
}
 
