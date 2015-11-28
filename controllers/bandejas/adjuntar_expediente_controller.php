<?php
session_start();

$header['js'][] = 'adjuntar_a_expediente';

$contenido = 'bandejas/adjuntar_a_expedientes';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>