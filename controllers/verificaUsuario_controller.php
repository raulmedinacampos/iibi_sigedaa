<?php
session_start();

$usuario = (isset($_POST['usuario'])) ? addslashes($_POST['usuario']) : "";
$contrasenia = (isset($_POST['password'])) ? addslashes($_POST['password']) : "";

$usuario=seleccionarSinMsj("*","usuario","usuario='".$usuario."' and contrasenia='".$contrasenia."'");

if ( is_array($usuario) && $usuario[0] != null ) {

	$_SESSION['tipoUsuario'] = $usuario['tipoUsuario'];
	$_SESSION['idUsuario']= $usuario['idUsuario'];
	$_SESSION['idEmpleado']=$usuario['idEmpleado'];

	$idArea = seleccionarSinMsj("idArea", "puesto","estatus=1 and idEmpleado=".$usuario['idEmpleado']);
	$_SESSION['idArea']= $idArea['idArea'];
	
	$siglas= seleccionarSinMsj("siglas,areaPadre", "cArea","idArea=".$idArea['idArea']);
	$_SESSION['siglasArea'] = $siglas['siglas'];
	$_SESSION['idAreaPadre'] =$siglas['areaPadre'];
		
	$_SESSION['areaPadre'] = seleccionarSinMsj("siglas", "cArea", "idArea=".$siglas['areaPadre']);
	
		
	if ( $_SESSION['tipoUsuario'] == 1 ) {
		Flight::redirect('bandejas/expedientes');
	} else {
		Flight::redirect('servicios/estado-de-solicitudes');
	}
} else {
	Flight::redirect('/?verifica=10');
}
?>