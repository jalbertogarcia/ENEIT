<?php
include 'conexion.php';
include 'config.inc.php';

if (isset($_POST['subir'])){



   $nombrePro = $_POST["nombrePro"];
  $categoria=$_POST["categoria"];
  $fichaTecnica=$_FILES["fichaTecnica"];
  $nombreInt=$_POST["nombreInt"];
  $ApellidoPaternoInt=$_POST["ApellidoPaternoInt"];
  $ApellidoMaternoInt=$_POST["ApellidoMaternoInt"];
  $NombreAs=$_POST["NombreAs"];
  $ApellidoPaternoAS=$_POST["ApellidoPaternoAS"];
  $ApellidoMaternoAS=$_POST["ApellidoMaternoAS"];


$nombre = $_FILES['fichaTecnica']['name'];
    $tipo = $_FILES['fichaTecnica']['type'];
    $tamanio = $_FILES['fichaTecnica']['size'];
    $ruta = $_FILES['fichaTecnica']['tmp_name'];
    $destino = "Archivos/" . $nombre;
    
   
    if ($nombre != "") {
        if (copy($ruta, $destino))
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(tamanio,tipo,nombre_archivo) VALUES('$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
      }


$insertar =  "INSERT INTO  proyecto (nombrePro,categoria) VALUES ('$nombrePro', '$categoria')"; 
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




  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}







  

   

  



 
