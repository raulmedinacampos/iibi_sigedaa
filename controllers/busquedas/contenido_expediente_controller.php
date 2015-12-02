<?php
session_start();

$header['js'][] = '';

$contenido = 'reportes/contenido_expediente';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>