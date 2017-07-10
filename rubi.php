<?php 
include 'conexion.php';
include 'config.inc.php';

if (isset($_POST['subir'])){


$documentacion = $_FILES['rubricass']['name'];
    $tipo = $_FILES['rubricass']['type'];
    $tamano = $_FILES['rubricass']['size'];
    $ruta = $_FILES['rubricass']['tmp_name'];
    $destino = "Rubricas/".$documentacion;
   
    if ($documentacion != "") {
        if (copy($ruta, $destino))
            $conexion =new Conect_MySql();
            $nuevo = "INSERT INTO documentacion (Documentacion,tamano,tiposs) VALUES ('$documentacion','$tamano','$tipo')";
            $query = $conexion->execute($nuevo);

            if(!$query){
  echo 'Error al registrar';
}else{
  echo 'Registro correctoo';
}
}
}

if (isset($_POST['Guardar'])){

$equipo = $_POST["equipo"];
$rubrica = $_POST["rubrica"];

  $insertar =  "INSERT INTO  equido (equipo, rubrica) VALUES ('$equipo', '$rubrica')"; 
   $resu = mysqli_query($conexion, $insertar);

if(!$insertar){
  echo 'Error al registrar';
}else{
  echo 'Registro correctoo';
}
}
?>