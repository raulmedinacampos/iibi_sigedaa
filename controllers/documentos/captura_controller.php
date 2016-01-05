<?php
session_start();

$header['js'][] = 'bootstrap3-typeahead.min';
$header['js'][] = 'captura_documentos';

$contenido = 'documentos/captura';

$tipo = seleccionarTodo("*","cTipoDocumental","1 order by tipoDocumental asc");

$areaAtencion = seleccionarTodo("area,idArea","cArea","areaPadre=3");

$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'tipo' => $tipo,
		'areaAtencion' => $areaAtencion
);
 
Flight::render('template/layout', $data);
?>