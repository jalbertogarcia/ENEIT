<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/iFrameCSS.css">
<link rel="stylesheet" href="../css/w3.css">
</head>

<body>


<?php require("../conexion.php"); ?>
<?php
// get the q parameter from URL
$p = $_GET["p"]; //Proyecto
$i = $_GET["i"]; //Equipo

$s = "INSERT INTO proyecto_equipo (id_Proyecto, id_Equipo) VALUES ('$p','$i')";
echo "Se asignó el equipo al proyecto";
if ($mysqli->query($s) === TRUE) {
   // echo "Se agregó el ingrediente al platillo";
   $consulta = "SELECT nombrePro, categoria, equipo.nombre AS equipo 
   FROM proyecto, proyecto_equipo, equipo WHERE proyecto.id_Proyecto=proyecto_equipo.id_Proyecto
   AND equipo.id_Equipo=proyecto_equipo.id_Equipo";
   $resul = $mysqli->query($consulta);

	if ($resul->num_rows > 0) {
		// output data of each row
		echo "<table class='w3-table w3-striped w3-border'>
		<thead>
		<tr class='w3-green'>		
		<th>Proyecto</th>
		<th>categoria</th>
		<th>Equipo</th>
		</tr></thead>";
		while($row = $resul->fetch_assoc()) {
			
		echo "<tr>";
		echo "<td>" . $row['nombrePro'] . "</td>";
		echo "<td>" . $row['categoria'] . "</td>";
		echo "<td>" . $row['equipo'] . "</td>";
		
	//echo "<td><a href=javascript:quitarIngr(".$row['id_platillo_ingrediente'].")>Quitar</a></td>";
	
	//echo "<td><a href=ModificarUsuarios.php?id=".$row['id_usuario'].">Modificar</a></td>";
		}
	echo "</table>";
	
		
	}
	else {
    	echo "No hay resultados";
}
} else {
    echo "Error: " . $s . "<br>" . $mysqli->error;
}

$mysqli->close();


?>
</body>
</html>