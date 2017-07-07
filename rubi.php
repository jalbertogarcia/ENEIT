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
}
}


$rubri = $_POST["equipo"];
$rubriDo = $_POST["rubrica"];

$insertar =  "INSERT INTO  equido (equipo, rubrica) VALUES ('$rubri', 'rubriDo')"; 
   $resu = mysqli_query($conexion, $insertar);
if(!$resu){
  echo 'Error al registrar';
}else{
  echo 'Registro correctoo';
}

?>