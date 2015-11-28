<?php
session_start();

$contenido = 'documentos/modificar';

$header['js'][] = 'captura_documentos';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>