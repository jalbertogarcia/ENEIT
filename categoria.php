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
  //mysql_query($insertar, $conexion);
  $inserttres =  "INSERT INTO asesor(NombreAs,ApellidoPaternoAS,ApellidoMaternoAS) VALUES ('$NombreAs', '$ApellidoPaternoAS', '$ApellidoMaternoAS')"; 
  //mysql_query($inserttres, $conexion);
  $insertdos = "INSERT INTO integrantes (nombreInt,ApellidoPaternoInt,ApellidoMaternoInt) VALUES ('$nombreInt', '$ApellidoPaternoInt', '$ApellidoMaternoInt')";
  


  $resultado = mysqli_query ($conexion, $inserttres);
if(!$resultado){
  echo 'Error al registrar';
}else{
  echo 'Evaluador Registrado';
}
 
