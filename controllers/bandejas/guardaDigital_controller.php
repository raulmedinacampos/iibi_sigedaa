<?php
session_start();
require 'inc/herramientas.inc.php';

/*
 * Los archivos digitales en el sigueda se ordenan oficina que registra el documento 
 * 
 * */

$maxID=maximo("idArchivoDigital", "archivoDigital")+1;
$idUsuModif = $_SESSION['idUsuario'];

$valores = $maxID.",'".$nombre."','".$ruta."',0,'PDF',1,".$idUsuModif.",now(),1"

insertar($tabla, $valores);
$newVar = mysqli_insert_id($GLOBALS['conexion']);

$valores = "estatus = 2, idArchivoDigital=".$newVar;
$condicion = "idDocumento = ".$idDocumento;

actualizar("documento", $valores, $condicion);




/***************/
$tipo =  (isset($_POST['tipoArchivo'])) ? addslashes($_POST['tipoArchivo']) : "";
$folio = (isset($_POST['folio'])) ? addslashes($_POST['folio']) : "";
$folio = str_replace("/", "-", $folio);
$ruta = '/opt/csw/share/www/sigedaa/archivo/_'.date('Y').'/';
$nombreDoc = normaArchivo(basename($_FILES['documento']['name']));
$tipoDoc = $_FILES['documento']['type'];
$tamanioDoc = $_FILES['documento']['size'];
$error = $_FILES['documento']['error'];


if($error=!0){
	/*	if (move_uploaded_file($_FILES['documento']['tmp_name'], $ruta."SUS_".$folio."_".$nombreDoc))
		$subida = 1;
		else
			echo $_FILES['documento']['error'];
			*/

		//3 MB  máximo
		if (!(strpos($tipoDoc, "pdf")  && ($tamanioDoc < 3000000)))
	 	//echo "La extensión o el tamaño de los archivos no es correcta.";
			$subida=0;

			else{

				if (move_uploaded_file($_FILES['documento']['tmp_name'], $ruta.$nombreDoc))
					//		echo "El archivo ha sido cargado correctamente.";
					$subida=1;
					else
						//echo "Ocurrió algún error al subir el documento. No pudo guardarse.";
						$subida=0;
			}

//areaBase puede ser 1:direccion 2: secacad 3:sectec 4:secadmin
			if($subida==1){
				$maxID=maximo("idArchivoDigital", "archivoDigital")+1;
				$valores = $maxID.",'".$folio."','SGD','".$nombreDoc."','$areaBase/_".date('Y')."/',0,3,".$_SESSION['idUsuario'].",now(),1";
				$insertar = insertar('archivoDigital', $valores);}
}//del if error
echo $subida;
?>
 *//*****************/





$data = array(
		'contenido' => $contenido,
		'expediente' => $expediente,
);

Flight::render('template/layout', $data);
?>