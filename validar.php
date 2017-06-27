<?php
session_start();
if (isset($_POST['usuario']) and isset($_POST['password'])) {

	include('conexion.php');
   
   
    //$usuario=$_POST['usuario'];
    //$password=$_POST['password'];

	$nombredeusuario=mysqli_real_escape_string($conexion, $_POST['usuario']);
	$password=mysqli_real_escape_string($conexion, $_POST['password']);

	$comprobacion_del_nombre='SELECT * FROM usuario WHERE correo="'.$nombredeusuario.'"';
	$comprobacion=$conexion->query($comprobacion_del_nombre);
    
    
	if ($comprobacion->num_rows>0) {
	$consulta_a_la_base=mysqli_query($conexion,'SELECT password1, nombre, tipo FROM usuario WHERE correo="'.$nombredeusuario.'"');
	$recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
	//$comprobar_password=password_verify($password, $recoger_dato['password1']);

	if ($recoger_dato['password1']==$password) {
		$_SESSION['correo']=$recoger_dato;
	    if ($_SESSION['correo']['tipo']== "Coordinador") {
	header('location: Index.html');
	}
	elseif ($_SESSION['correo']['tipo']== "Evaluador") {
	header('location: Evaluador.html');
	}
	}
	else{
		
		print 'Los datos introducidos son incorrectos<br>
		<a href="Inicio.html">Volver</a>';
	}
	}else{
		print 'No estas<br>
		<a href="Inicio.html">Volver</a>';
	}
}else{
	header('location: Inicio.html');
}

// $usuario=$_POST['usuario'];
// $password=$_POST['password'];

// $conexion=mysqli_connect("localhost","root","", "eneitbd");
// $consulta="SELECT * FROM usuario WHERE usuario='$usuario' and password1='$password'";
// $resultado=mysqli_query($conexion, $consulta);

// $filas=mysqli_num_rows($resultado);
// if($filas>0){
// 	header("location:Index.html");
// }else{
// 	echo "Error en la autentificación";
// }
//mysqli_free_result($resultado);
//mysql_close();
