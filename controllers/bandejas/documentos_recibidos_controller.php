<?php
session_start();

$header['js'][] = 'documentos_recibidos';

$contenido = 'bandejas/documentos_recibidos';

$tablas = "documento,cTipoDocumental,empleado,usuario";

$condicion = 	"cTipoDocumental.idTipoDocumental = documento.idTipoDocumental and
				 usuario.idUsuario = empleado.idUsuario and
				 idUsuarioModif = usuario.idUsuario
				 order by consecAnual asc";

$documento = seleccionarTodo("folio,tipoDocumental,asunto,documento.fechaAlta,iniciales",$tablas,$condicion);


$data = array(
		'header' => $header,
		'contenido' => $contenido,
		'documento' => $documento,
);

Flight::render('template/layout', $data);
?>