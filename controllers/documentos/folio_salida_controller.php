<?php
session_start();

$contenido = 'documentos/folio_salida';

$header['js'][] = 'folio_salida';

$data = array(
		'header' => $header,
		'contenido' => $contenido,
);

Flight::render('template/layout', $data);
?>