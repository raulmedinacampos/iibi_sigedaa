<?php
session_start();

$contenido = 'seguimiento/captura';

$header['js'][] = 'integracion_documentos';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>