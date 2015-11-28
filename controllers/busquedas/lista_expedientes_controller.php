<?php
session_start();

$contenido = 'reportes/lista_expedientes';

$header['js'][] = 'expedientes';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>