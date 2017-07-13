<?php 

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	require 'conexion.php';
sleep(2);
session_start();
$mysqli->set_charset('utf8');
$usuario = $mysqli->real_escape_string($_POST['usuariolg']);
$pass = $mysqli->real_escape_string($_POST['passlg']);

if ($nueva_consulta = $mysqli->prepare("SELECT * FROM usuario WHERE correo=? AND password1 =?")) {
	$nueva_consulta->bind_param('ss', $usuario, $pass);
	$nueva_consulta->execute();
	$resultado=$nueva_consulta->get_result();
   
   if ($resultado->num_rows==1) {
   	$datos=$resultado->fetch_assoc();
   	$_SESSION['usuario'] = $datos;
    $_SESSION['id_usuario'] = $datos['id_Usuario'];
    $_SESSION['nombre']=$datos['nombre'];
    $_SESSION['tipo']=$datos['tipo'];
    $_SESSION['status']=$datos['status'];
   //	echo json_encode(array('error' =>false, 'tipo' =>$datos['tipo'], 'status' =>$datos['status']));
        echo json_encode(array('error' =>false, 'tipo' =>$datos['tipo']));

    
   }else{
    echo json_encode(array('error' => true));
   }
   $nueva_consulta->close();
}
}

$mysqli->close();
 ?>