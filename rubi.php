<?php 
include 'conexion.php';
include 'config.inc.php';

if (isset($_POST['subir'])){

$formato = array('.pdf');
$documentacion = $_FILES['rubricass']['name'];
    $tipo = $_FILES['rubricass']['type'];
    $tamano = $_FILES['rubricass']['size'];
    $ruta = $_FILES['rubricass']['tmp_name'];
    $destino = "Archivos/".$documentacion;
    $ext=substr($documentacion, strrpos($documentacion, '.'));
   if  (in_array($ext,$formato)){
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
}

if (isset($_POST['Guardar'])){

//$equipo = 1;
//$rubrica = 1;
$equipo = $_POST["id_Equipo"];
$rubrica = $_POST["id_Documentacion"];
//$insertar = "SELECT equipoeva.id_Equipo, documentacion.id_Documentacion
//FROM  "
//"INSERT INTO equipodocumentacion SELECT * FROM equipoeva where 
//equipoeva.id_Equipo = equipodocumentacion.id_Equipo ";        
  $insertar =  "INSERT INTO  equipodocumentacion (id_Equipo, id_Documentacion) VALUES ('$equipo','$rubrica')"; 
  $conexion =new Conect_MySql();
  $res = $conexion->execute($insertar);

if(!$res){
  echo 'Error al registrar';
}else{
  echo 'Registro correctoo';
}
}
?>       