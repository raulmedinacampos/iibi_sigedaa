<?php
session_start();

$usuario = (isset($_POST['usuario'])) ? addslashes($_POST['usuario']) : "";
$contrasenia = (isset($_POST['password'])) ? addslashes($_POST['password']) : "";

$usuario=seleccionarSinMsj("*","usuarioSUS","usuario='".$usuario."' and contrasenia='".$contrasenia."'");

if ( is_array($usuario) && $usuario[0] != null ) {

	$_SESSION['tipoUsuario'] = $usuario['tipoUsuario'];
	$_SESSION['idUsuario']= $usuario['idUsuario'];
	$_SESSION['idEmpleado']=$usuario['idEmpleado'];
	$_SESSION['idUAutoriza']=$usuario['idUsuAutoriza'];
		
	if ( $_SESSION['tipoUsuario'] == 1 ) {
		Flight::redirect('bandejas/expedientes');
	} else {
		Flight::redirect('servicios/estado-de-solicitudes');
	}
} else {
	Flight::redirect('/?verifica=10');
}
?>