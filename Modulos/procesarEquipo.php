<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/iFrameCSS.css">

</head>

<body>


<?php require("../conexion.php"); ?>
<?php
// get the q parameter from URL
$p = $_GET["p"];
$i = $_GET["i"];

$sql = "INSERT INTO equipoe (nombre, numEq)
VALUES ('$p', '$i')";
echo "Se agregó el evaluador al equipo";
if ($mysqli->query($sql) === TRUE) {
   // echo "Se agregó el ingrediente al platillo";
   $consulta = "SELECT numEq, nombre FROM equipoe";
   $result = $mysqli->query($consulta);

	if ($result->num_rows > 0) {
		// output data of each row
		echo "<table border='1'>
		<thead>
		<tr class='w3-red'>		
		<th>Equipo</th>
		<th>Evaluador</th>
		</tr></thead>";
		while($row = $result->fetch_assoc()) {
			
		echo "<tr>";
		echo "<td>" . $row['numEq'] . "</td>";
		echo "<td>" . $row['nombre'] . "</td>";
		
	//echo "<td><a href=javascript:quitarIngr(".$row['id_platillo_ingrediente'].")>Quitar</a></td>";
	
	//echo "<td><a href=ModificarUsuarios.php?id=".$row['id_usuario'].">Modificar</a></td>";
		}
	echo "</table>";
	
		
	}
	else {
    	echo "No hay resultados";
}
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();


?>
</body>
</html>