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
$p = $_GET["p"];
$i = $_GET["i"];

$sql = "INSERT INTO equipo_integrantes (id_Usuario, id_Equipo)
VALUES ('$p', '$i')";
echo "Se agregó el evaluador al equipo";
if ($mysqli->query($sql) === TRUE) {
   // echo "Se agregó el ingrediente al platillo";
   $consulta = "SELECT usuario.nombre as Eval, ApellidoP, ApellidoM, titulo,especialidad, equipo.nombre AS Equipo
     FROM equipo, equipo_integrantes, usuario WHERE equipo_integrantes.id_Equipo=equipo.id_Equipo
      AND equipo_integrantes.id_Usuario=usuario.id_Usuario";
   $resul = $mysqli->query($consulta);

	if ($resul->num_rows > 0) {
		// output data of each row
		echo "<table class='w3-table w3-striped w3-border'>
		<thead>
		<tr class='w3-green'>		
		<th>Equipo</th>
		<th>Evaluador</th>
		<th></th>
		<th></th>
		<th>Título</th>
		<th>Especialidad</th>
		</tr></thead>";
		while($row = $resul->fetch_assoc()) {
			
		echo "<tr>";
		echo "<td>" . $row['Equipo'] . "</td>";
		echo "<td>" . $row['Eval'] . "</td>";
		echo "<td>" . $row['ApellidoP'] . "</td>";
		echo "<td>" . $row['ApellidoM'] . "</td>";
		echo "<td>" . $row['titulo'] . "</td>";
		echo "<td>" . $row['especialidad'] . "</td>";
		
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