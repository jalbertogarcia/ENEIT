<?php 
include 'conexion.php';
include 'config.inc.php';

if (isset($_POST['subir'])){



   $nombrePro = $_POST["nombrePro"];
  $categoria=$_POST["categoria"];
  $fichaTecnica=$_FILES["fichaTecnica"];
  //intgrante1
  $nombreInt=$_POST["nombreInt"];
  $ApellidoPaternoInt=$_POST["ApellidoPaternoInt"];
  $ApellidoMaternoInt=$_POST["ApellidoMaternoInt"];
  //Asesor1
  $NombreAs=$_POST["NombreAs"];
  $ApellidoPaternoAS=$_POST["ApellidoPaternoAS"];
  $ApellidoMaternoAS=$_POST["ApellidoMaternoAS"];
  //Asesor2
  $NombreAs2=$_POST["NombreAs"];
  $ApellidoPaternoAS2=$_POST["ApellidoPaternoAS"];
  $ApellidoMaternoAS2=$_POST["ApellidoMaternoAS"];
  //Asesor3
  $NombreAs3=$_POST["NombreAs"];
  $ApellidoPaternoAS3=$_POST["ApellidoPaternoAS"];
  $ApellidoMaternoAS3=$_POST["ApellidoMaternoAS"];





//integrante2

 $nombreInt2=$_POST["nombreInt"];
  $ApellidoPaternoInt2=$_POST["ApellidoPaternoInt"];
  $ApellidoMaternoInt2=$_POST["ApellidoMaternoInt"];

//integrante3
  $nombreInt3=$_POST["nombreInt"];
  $ApellidoPaternoInt3=$_POST["ApellidoPaternoInt"];
  $ApellidoMaternoInt3=$_POST["ApellidoMaternoInt"];
//integrante4
  $nombreInt4=$_POST["nombreInt"];
  $ApellidoPaternoInt4=$_POST["ApellidoPaternoInt"];
  $ApellidoMaternoInt4=$_POST["ApellidoMaternoInt"];
//integrante5
  $nombreInt5=$_POST["nombreInt"];
  $ApellidoPaternoInt5=$_POST["ApellidoPaternoInt"];
  $ApellidoMaternoInt5=$_POST["ApellidoMaternoInt"];





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
  
 
  $inserttres =  "INSERT INTO asesor(NombreAs,ApellidoPaternoAS,ApellidoMaternoAS)
   VALUES 
   ('$NombreAs', '$ApellidoPaternoAS', '$ApellidoMaternoAS'),
    ('$NombreAs2', '$ApellidoPaternoAS2', '$ApellidoMaternoAS2'),
     ('$NombreAs3', '$ApellidoPaternoAS3', '$ApellidoMaternoAS3')"; 
  $resultadoses = mysqli_query ($conexion, $inserttres);


  $insertdos = "INSERT INTO integrantes (nombreInt,ApellidoPaternoInt,ApellidoMaternoInt) 
  VALUES
   ('$nombreInt', '$ApellidoPaternoInt', '$ApellidoMaternoInt'),
   ('$nombreInt2', '$ApellidoPaternoInt2','$ApellidoMaternoInt2'),
   ('$nombreInt3', '$ApellidoPaternoInt3','$ApellidoMaternoInt3'),
   ('$nombreInt4', '$ApellidoPaternoInt4','$ApellidoMaternoInt4'),
    ('$nombreInt5', '$ApellidoPaternoInt5','$ApellidoMaternoInt5')";
  
  $resultado = mysqli_query ($conexion, $insertdos);

   
 




if(!$resultadoses&!$resu&!$resultado){
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







  

   

  



 
