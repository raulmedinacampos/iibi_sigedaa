<?php
session_start();

$header['js'][] = 'captura_documentos';

$contenido = 'documentos/captura';

$tipo = seleccionarTodo("*","cTipoDocumental","1 order by tipoDocumental asc");
/*while($row=mysqli_fetch_array($tipo[1])){
	echo "<br>value ".$row[0];
	echo "<br>Text ".$row[1];}
*/

$dependencia = seleccionarTodo("*", "cDependencia", "1 order by dependencia");
/*while($row=mysqli_fetch_array($dependencia[1])){
	echo "<br>value ".$row[0];
	echo "<br>Text ".$row[1];}
*/

$areaAtencion = seleccionarTodo("area,idArea","cArea","areaPadre=3");
/*while($row=mysqli_fetch_array($areaAtencion[1])){
	echo "<br>value ".$row[0];
	echo "<br>Text ".$row[1];}
*/

$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'tipo' => $tipo,
		'areaAtención' => $areaAtencion,
		'dependencia' => $dependencia
);
 
Flight::render('template/layout', $data);
?>