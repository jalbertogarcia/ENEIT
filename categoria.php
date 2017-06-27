?><?php
include 'conexion.php'

  mysql_connect("localhost"," ","root"); 

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("verano1"); 

  $nombrePro = $_POST["nombrePro"]
  $Categoria=$_POST["categoria"];
  $ficha=$_POST["fichaTecnica"]

  $insert = " INSERT INTO proyecto (nombrePro,Categoria,fichaTecnica) VALUES ('$nombrePro', '$categoria', '$fichaTecnica')"

  $resultado = mysql_query($conexion, $insert);
  if(!$resultado){

  	echo "Error";
  }else{
  	echo "registrado";
  }
 
  

 
 
?>	 