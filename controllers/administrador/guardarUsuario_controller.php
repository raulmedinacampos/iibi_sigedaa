<?php
$tipoUsuario = (isset($_POST['grupo'])) ? addslashes($_POST['grupo']) : "";
$idEmpleado = (isset($_POST['hdn_id'])) ? addslashes($_POST['hdn_id']) : "";
$usuario = (isset($_POST['usuario'])) ? addslashes($_POST['usuario']) : "";

$contrasenia = "contrasenia";
$fechaModif = date('Y-m-d H:i:s');

$valores =	$idEmpleado.','.
			$tipoUsuario.',"'.
			$usuario.'","'.
			$contrasenia.'","'.
			$fechaModif.'",'.
			'1';

$insertar = insertar("usuario", $valores);

if ( $insertar[0] == 1 ) {
} else {
	echo "Ocurió un problema, favor de comunicarse con el adminsitrador.";
}
?>