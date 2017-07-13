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
  $NombreAs2=$_POST["NombreAs2"];
  $ApellidoPaternoAS2=$_POST["ApellidoPaternoAS2"];
  $ApellidoMaternoAS2=$_POST["ApellidoMaternoAS2"];
  //Asesor3
  $NombreAs3=$_POST["NombreAs3"];
  $ApellidoPaternoAS3=$_POST["ApellidoPaternoAS3"];
  $ApellidoMaternoAS3=$_POST["ApellidoMaternoAS3"];





//integrante2

 $nombreInt2=$_POST["nombreInt2"];
  $ApellidoPaternoInt2=$_POST["ApellidoPaternoInt2"];
  $ApellidoMaternoInt2=$_POST["ApellidoMaternoInt2"];

//integrante3
  $nombreInt3=$_POST["nombreInt3"];
  $ApellidoPaternoInt3=$_POST["ApellidoPaternoInt3"];
  $ApellidoMaternoInt3=$_POST["ApellidoMaternoInt3"];
//integrante4
  $nombreInt4=$_POST["nombreInt4"];
  $ApellidoPaternoInt4=$_POST["ApellidoPaternoInt4"];
  $ApellidoMaternoInt4=$_POST["ApellidoMaternoInt4"];
//integrante5
  $nombreInt5=$_POST["nombreInt5"];
  $ApellidoPaternoInt5=$_POST["ApellidoPaternoInt5"];
  $ApellidoMaternoInt5=$_POST["ApellidoMaternoInt5"];




$formato = array('.pdf');
$nombre = $_FILES['fichaTecnica']['name'];
    $tipo = $_FILES['fichaTecnica']['type'];
    $tamanio = $_FILES['fichaTecnica']['size'];
    $ruta = $_FILES['fichaTecnica']['tmp_name'];
    $destino = "Archivos/" . $nombre;
    
   $ext=substr($nombre, strrpos($nombre, '.'));
   if  (in_array($ext,$formato)){
    if ($nombre != "") {
        if (copy($ruta, $destino))
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(tamanio,tipo,nombre_archivo) VALUES('$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
      }
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

   $id_Integrante = $_POST["id_Integrante"];
   $id_Proyecto = $_POST["id_Proyecto"];
 $insertdosINPO = "INSERT INTO integrantesproyecto(id_Integrante,id_Proyecto) VALUES ($id_Integrante,id_Proyecto)"
 $resus = mysql_query($conexion, $insertdosINPO);



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







  

   

  



 
