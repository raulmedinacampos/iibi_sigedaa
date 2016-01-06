<?php
session_start();

$contenido = 'bandejas/documentos_atendidos';

$tablas = "documento,cTipoDocumental";

$condicion = 	"cTipoDocumental.idTipoDocumental = documento.idTipoDocumental
				 order by consecAnual asc";

$documento = seleccionarTodo("consecAnual,tipoDocumental,asunto,fechaAlta,idExpediente",$tablas,$condicion);


$data = array(
		'contenido' => $contenido,
		'documento' => $documento,
);

Flight::render('template/layout', $data);
?>