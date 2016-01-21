<?php
session_start();

$header['js'][] = 'documentos_recibidos';

$contenido = 'bandejas/documentos_recibidos';

$tablas = "documento,cTipoDocumental,cArea";

$condicion = 	"cTipoDocumental.idTipoDocumental = documento.idTipoDocumental and
				 areaAtencion = idArea
				 order by consecArea asc";

$documento = seleccionarTodo("folio,tipoDocumental,asunto,documento.fechaAlta,area",$tablas,$condicion);


$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'documento' => $documento,
);

Flight::render('template/layout', $data);
?>