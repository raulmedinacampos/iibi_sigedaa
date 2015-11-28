<?php
session_start();

$header['js'][] = 'captura_documentos';

$contenido = 'documentos/captura';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>