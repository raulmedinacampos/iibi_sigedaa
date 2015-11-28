<?php
session_start();

$header['js'][] = 'documentos_recibidos';

$contenido = 'bandejas/documentos_recibidos';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>